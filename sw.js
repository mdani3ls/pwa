var cacheName = 'hello-pwa';
var filesToCache = [
  '/',
  '/index.html',
<<<<<<< HEAD:sw.js
  '/css/style.css',
=======
  '/pwa.html',
  '/css/estilos.css',
>>>>>>> c15fae540d127ca02c70b6777e6d83f1db1b901b:js/sw.js
  '/js/main.js'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
