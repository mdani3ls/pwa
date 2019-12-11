self.addEventListener('install', async event => {
  console.log('install event')
});

self.addEventListener('fetch', async event => {
  console.log('fetch event')
});

const cacheName = 'pwa-conf-v1';
const staticAssets = [
  './',
  './index.html',
  './app.js',
  './css/estilos.css'
];

self.addEventListener('install', async event => {
  const cache = await caches.open(cacheName); (1)
  await cache.addAll(staticAssets); (2)
});