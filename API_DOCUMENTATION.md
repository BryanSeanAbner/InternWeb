# API Documentation for Frontend Vercel

## Base URL
```
https://your-railway-app.railway.app/api/v1
```

## Endpoints

### 1. Home Page Data
```
GET /home
```
Returns all data needed for homepage:
- Latest posts
- Categories
- Testimonials
- Benefits
- Requirements
- Apply steps

### 2. Posts/Berita
```
GET /posts
GET /posts/{id}
GET /posts/latest
```

### 3. Categories
```
GET /categories
GET /categories/{id}
```

### 4. Testimonials
```
GET /testimonials
```

### 5. Benefits
```
GET /benefits
```

### 6. Requirements
```
GET /requirements
```

### 7. Apply Steps
```
GET /apply-steps
```

## Response Format
All endpoints return JSON in this format:
```json
{
    "success": true,
    "data": [...]
}
```

## Example Usage (Frontend)
```javascript
// Fetch homepage data
const response = await fetch('https://your-railway-app.railway.app/api/v1/home');
const data = await response.json();

// Use the data
const { latestPosts, categories, testimonials, benefits, requirements, applySteps } = data.data;
```

## CORS
API is configured to allow requests from any origin (*) for development.
For production, you should restrict this to your Vercel domain. 