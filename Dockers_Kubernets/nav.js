// nav.js - shared navigation
const NAV_LINKS = [
  { href: 'index.html', label: '🏠 Índex' },
  { href: '01-fonaments-docker.html', label: '01 · Fonaments' },
  { href: '02-imatges.html', label: '02 · Imatges' },
  { href: '03-apps-optimitzacio.html', label: '03 · Apps Reals' },
  { href: '04-persistencia-xarxes.html', label: '04 · Persistència' },
  { href: '05-volums.html', label: '05 · Volums' },
  { href: '06-docker-compose.html', label: '06 · Compose' },
  { href: '07-networking.html', label: '07 · Networking' },
  { href: '08-registry.html', label: '08 · Registry' },
  { href: '09-swarm.html', label: '09 · Swarm' },
  { href: '10-kubernetes-pods.html', label: '10 · K8s Intro' },
  { href: '11-que-es-pod.html', label: '11 · Pods' },
  { href: '12-replicasets.html', label: '12 · ReplicaSets' },
  { href: '13-services.html', label: '13 · Services' },
  { href: '14-ingress.html', label: '14 · Ingress' },
  { href: '15-configmaps-secrets.html', label: '15 · ConfigMaps' },
  { href: '16-volumes-pv-pvc.html', label: '16 · PV & PVC' },
  { href: '17-troubleshooting.html', label: '17 · Troubleshooting' },
  { href: '18-projecte-final.html', label: '18 · Projecte Final' },
];

function renderNav(currentHref) {
  const nav = document.getElementById('main-nav');
  if (!nav) return;
  nav.innerHTML = `
    <a class="nav-logo" href="index.html">🐳 Docker<span>&</span>☸️ K8s</a>
    <div class="nav-links">
      ${NAV_LINKS.map(l => `<a href="${l.href}" class="${l.href === currentHref ? 'active' : ''}">${l.label}</a>`).join('')}
    </div>
  `;
}

function renderFooter() {
  const footer = document.getElementById('main-footer');
  if (!footer) return;
  const idx = NAV_LINKS.findIndex(l => l.href === CURRENT_PAGE);
  const prev = idx > 0 ? NAV_LINKS[idx - 1] : null;
  const next = idx < NAV_LINKS.length - 1 ? NAV_LINKS[idx + 1] : null;
  footer.innerHTML = `
    <nav class="page-nav">
      ${prev ? `<a href="${prev.href}">← ${prev.label}</a>` : '<span></span>'}
      ${next ? `<a href="${next.href}" class="next">${next.label} →</a>` : '<span></span>'}
    </nav>
    <footer>
      <p>Curs de Docker i Kubernetes · Material educatiu · 2025</p>
    </footer>
  `;
}

document.addEventListener('DOMContentLoaded', () => {
  renderNav(CURRENT_PAGE);
  renderFooter();
});
