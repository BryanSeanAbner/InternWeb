# Frontend Vercel Setup

## 1. Create Next.js App
```bash
npx create-next-app@latest frontend-nusantara-tv --typescript --tailwind --eslint
cd frontend-nusantara-tv
```

## 2. Environment Variables
Create `.env.local`:
```env
NEXT_PUBLIC_API_URL=https://your-railway-app.railway.app/api/v1
```

## 3. API Service
Create `services/api.ts`:
```typescript
const API_URL = process.env.NEXT_PUBLIC_API_URL;

export const api = {
  async getHomeData() {
    const response = await fetch(`${API_URL}/home`);
    return response.json();
  },
  
  async getPosts() {
    const response = await fetch(`${API_URL}/posts`);
    return response.json();
  },
  
  async getPost(id: string) {
    const response = await fetch(`${API_URL}/posts/${id}`);
    return response.json();
  },
  
  async getCategories() {
    const response = await fetch(`${API_URL}/categories`);
    return response.json();
  },
  
  async getTestimonials() {
    const response = await fetch(`${API_URL}/testimonials`);
    return response.json();
  },
  
  async getBenefits() {
    const response = await fetch(`${API_URL}/benefits`);
    return response.json();
  },
  
  async getRequirements() {
    const response = await fetch(`${API_URL}/requirements`);
    return response.json();
  },
  
  async getApplySteps() {
    const response = await fetch(`${API_URL}/apply-steps`);
    return response.json();
  },
};
```

## 4. Homepage Component
Create `components/HomePage.tsx`:
```typescript
'use client';

import { useEffect, useState } from 'react';
import { api } from '@/services/api';

export default function HomePage() {
  const [data, setData] = useState<any>(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await api.getHomeData();
        setData(response.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  if (loading) {
    return <div>Loading...</div>;
  }

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative h-screen flex items-center justify-start bg-cover bg-center">
        <div className="ml-4 md:ml-20 max-w-xl bg-black bg-opacity-30 rounded-lg p-6 shadow-2xl">
          <h1 className="text-4xl md:text-5xl font-bold text-white mb-4">
            Mulai Pengalaman Magangmu di Nusantara TV
          </h1>
          <p className="text-lg text-white mb-6">
            Bergabunglah dalam magang kami untuk pengalaman berharga di dunia penyiaran dan produksi media.
          </p>
          <a href="#howtoapply" className="bg-blue-700 text-white px-8 py-3 rounded-full text-xl font-semibold hover:bg-blue-800">
            Cara Mendaftar
          </a>
        </div>
      </section>

      {/* Berita Section */}
      <section className="py-8 container mx-auto px-4">
        <h2 className="text-3xl font-bold text-center text-blue-700 mb-8">Berita Terkini</h2>
        <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          {data?.latestPosts?.map((post: any) => (
            <div key={post.id} className="bg-white rounded-lg shadow-xl p-6 hover:shadow-2xl transition-all duration-300">
              <h3 className="font-bold text-xl mb-2">{post.title}</h3>
              <p className="text-gray-600">{post.body.substring(0, 100)}...</p>
            </div>
          ))}
        </div>
      </section>

      {/* Categories Section */}
      <section className="py-16">
        <h2 className="text-3xl font-bold text-center text-blue-700 mb-8">Kategori Bidang Magang</h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
          {data?.categories?.map((category: any) => (
            <div key={category.id} className="relative bg-white rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300">
              <img src={category.photo} alt={category.name} className="w-full h-48 object-cover" />
              <div className="absolute inset-0 bg-black bg-opacity-40"></div>
              <div className="absolute bottom-0 left-0 right-0 p-4">
                <div className="text-lg font-bold text-white">{category.name}</div>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Testimonials Section */}
      <section className="py-16 bg-gray-50">
        <h2 className="text-3xl font-bold text-center text-blue-700 mb-8">Testimonial</h2>
        <div className="max-w-7xl mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {data?.testimonials?.map((testimonial: any) => (
              <div key={testimonial.id} className="bg-white rounded-lg shadow-xl p-6 text-center">
                <img src={testimonial.photo} alt={testimonial.name} className="w-16 h-16 rounded-full mx-auto mb-4" />
                <p className="italic text-gray-600 mb-4">"{testimonial.description}"</p>
                <h4 className="font-bold text-blue-700">{testimonial.name}</h4>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}
```

## 5. Deploy to Vercel
```bash
npm run build
vercel --prod
```

## 6. Update Railway Environment
Add to your Railway app:
- `FRONTEND_URL=https://your-vercel-app.vercel.app`

## 7. Update CORS for Production
In your Laravel backend, update the CORS middleware to only allow your Vercel domain:
```php
$response->headers->set('Access-Control-Allow-Origin', 'https://your-vercel-app.vercel.app');
``` 