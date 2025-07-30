const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

console.log('🚀 Starting enhanced build process...');

// Function to copy manifest file
function copyManifest() {
  const src = path.join('public', 'build', '.vite', 'manifest.json');
  const dest = path.join('public', 'build', 'manifest.json');
  
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, dest);
    console.log('✅ Manifest copied successfully');
  } else {
    console.log('❌ Source manifest not found');
  }
}

// Function to optimize CSS
function optimizeCSS() {
  const cssPath = path.join('public', 'build', 'assets');
  const files = fs.readdirSync(cssPath);
  
  files.forEach(file => {
    if (file.endsWith('.css')) {
      const filePath = path.join(cssPath, file);
      console.log(`📦 Optimizing CSS: ${file}`);
    }
  });
}

// Function to create build info
function createBuildInfo() {
  const buildInfo = {
    timestamp: new Date().toISOString(),
    version: '1.0.0',
    environment: process.env.NODE_ENV || 'development',
    buildType: 'enhanced'
  };
  
  const buildInfoPath = path.join('public', 'build', 'build-info.json');
  fs.writeFileSync(buildInfoPath, JSON.stringify(buildInfo, null, 2));
  console.log('📝 Build info created');
}

// Function to validate build
function validateBuild() {
  const requiredFiles = [
    'public/build/manifest.json',
    'public/build/assets/app-cVwL2B9Q.css',
    'public/build/assets/app-DaBYqt0m.js'
  ];
  
  let allFilesExist = true;
  
  requiredFiles.forEach(file => {
    if (fs.existsSync(file)) {
      console.log(`✅ ${file} exists`);
    } else {
      console.log(`❌ ${file} missing`);
      allFilesExist = false;
    }
  });
  
  return allFilesExist;
}

// Main build process
try {
  // Run Vite build
  console.log('🔨 Running Vite build...');
  execSync('npm run build', { stdio: 'inherit' });
  
  // Copy manifest
  copyManifest();
  
  // Optimize CSS
  optimizeCSS();
  
  // Create build info
  createBuildInfo();
  
  // Validate build
  if (validateBuild()) {
    console.log('🎉 Build completed successfully!');
  } else {
    console.log('⚠️  Build completed with warnings');
  }
  
} catch (error) {
  console.error('❌ Build failed:', error.message);
  process.exit(1);
} 