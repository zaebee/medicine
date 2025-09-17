/**
 * Interactive Navigation System for Medical Clinic Documentation
 * Enhances Mermaid diagrams with dynamic cross-references and navigation
 */

class DocumentationNavigator {
    constructor() {
        this.baseUrl = './';
        this.currentPage = this.getCurrentPage();
        this.initializeNavigation();
        this.addEnhancedFeatures();
    }

    getCurrentPage() {
        const path = window.location.pathname;
        const filename = path.split('/').pop() || 'README.md';
        return filename.replace('.html', '.md');
    }

    initializeNavigation() {
        // Wait for Mermaid to render
        if (typeof mermaid !== 'undefined') {
            mermaid.initialize({
                startOnLoad: true,
                theme: 'default',
                themeVariables: {
                    primaryColor: '#e3f2fd',
                    primaryTextColor: '#1976d2',
                    primaryBorderColor: '#1976d2',
                    lineColor: '#757575',
                    sectionBkgColor: '#f5f5f5',
                    altSectionBkgColor: '#ffffff',
                    gridColor: '#e0e0e0'
                },
                flowchart: {
                    useMaxWidth: true,
                    htmlLabels: true
                },
                journey: {
                    diagramMarginX: 50,
                    diagramMarginY: 10,
                    leftMargin: 150,
                    width: 150,
                    height: 50,
                    boxMargin: 10,
                    boxTextMargin: 5,
                    noteMargin: 10,
                    messageMargin: 35,
                    mirrorActors: true
                }
            });
        }

        this.addClickHandlers();
        this.addKeyboardNavigation();
        this.addBreadcrumbs();
    }

    addClickHandlers() {
        // Enhanced click handling for Mermaid diagrams
        document.addEventListener('click', (event) => {
            const target = event.target;

            // Handle Mermaid node clicks
            if (target.closest('.node')) {
                const node = target.closest('.node');
                const nodeId = node.getAttribute('id');
                this.handleNodeClick(nodeId, event);
            }

            // Handle custom navigation links
            if (target.hasAttribute('data-nav-target')) {
                event.preventDefault();
                const targetDoc = target.getAttribute('data-nav-target');
                this.navigateToDocument(targetDoc);
            }
        });
    }

    handleNodeClick(nodeId, event) {
        // Define navigation mappings for different diagram nodes
        const navigationMap = {
            // Architecture Overview
            'DJANGO': '../technical/technical_architecture.md',
            'WAGTAIL': '../technical/cms_comparison.md',
            'SSL': '../technical/security_compliance.md',
            'USER': '../technical/technical_architecture.md#user-пользователи',
            'DOCTOR': '../technical/technical_architecture.md#doctor-врачи',
            'APPOINTMENT': '../technical/technical_architecture.md#appointment-записи-на-приём',

            // Documentation Map
            'BRIEF': './business/brief.md',
            'QUESTIONS': './business/client_questions.md',
            'PROJECTDATA': './business/project_data.json',
            'TECHARCH': './technical/technical_architecture.md',
            'SECURITY': './technical/security_compliance.md',
            'UXREQ': './design/ux_design_requirements.md',

            // Development Workflow
            'PLAN': '../development/tasks_estimates.md#проектирование',
            'BACK': '../development/tasks_estimates.md#backend-разработка',
            'FRONT': '../development/tasks_estimates.md#frontend-разработка',
            'DESIGN': '../development/tasks_estimates.md#дизайн',
            'TEST': '../deployment/testing_acceptance.md',

            // User Features
            'BOOKING': '../technical/technical_architecture.md#appointment-записи-на-приём',
            'DOCTORS': '../technical/technical_architecture.md#doctor-врачи',
            'SERVICES': '../technical/technical_architecture.md#service-медицинские-услуги',
            'RESPONSIVE': '../design/ux_design_requirements.md#требования-к-адаптивности',
            'SEO': '../deployment/seo_marketing.md'
        };

        const targetUrl = navigationMap[nodeId];
        if (targetUrl) {
            this.navigateToDocument(targetUrl);
        } else {
            // Show information tooltip for unlinked nodes
            this.showNodeInfo(nodeId, event);
        }
    }

    navigateToDocument(url) {
        // Check if it's an external link or internal reference
        if (url.startsWith('http')) {
            window.open(url, '_blank');
        } else if (url.includes('#')) {
            // Handle anchor links
            const [file, anchor] = url.split('#');
            if (file && file !== this.currentPage) {
                window.location.href = file + '#' + anchor;
            } else {
                // Same page anchor
                document.getElementById(anchor)?.scrollIntoView({ behavior: 'smooth' });
            }
        } else {
            window.location.href = url;
        }
    }

    showNodeInfo(nodeId, event) {
        // Create and show information tooltip
        const tooltip = document.createElement('div');
        tooltip.className = 'node-info-tooltip';
        tooltip.innerHTML = this.getNodeInfo(nodeId);

        tooltip.style.position = 'absolute';
        tooltip.style.left = event.pageX + 10 + 'px';
        tooltip.style.top = event.pageY + 10 + 'px';
        tooltip.style.background = '#ffffff';
        tooltip.style.border = '1px solid #ddd';
        tooltip.style.borderRadius = '4px';
        tooltip.style.padding = '8px 12px';
        tooltip.style.fontSize = '12px';
        tooltip.style.zIndex = '1000';
        tooltip.style.boxShadow = '0 2px 8px rgba(0,0,0,0.1)';
        tooltip.style.maxWidth = '200px';

        document.body.appendChild(tooltip);

        // Remove tooltip after 3 seconds or on click
        setTimeout(() => tooltip.remove(), 3000);
        tooltip.addEventListener('click', () => tooltip.remove());
    }

    getNodeInfo(nodeId) {
        const infoMap = {
            'HTML': 'Modern HTML5/CSS3/JavaScript frontend',
            'VUE': 'Vue.js for interactive components',
            'POSTGRES': 'PostgreSQL 14+ primary database',
            'REDIS': 'Redis for caching and sessions',
            'SMS': 'SMS notifications via SMSC.ru',
            'MAPS': 'Yandex/Google Maps integration',
            'PAYMENT': 'YooKassa payment processing',
            'ANALYTICS': 'Google Analytics 4 + Yandex Metrika'
        };

        return infoMap[nodeId] || `Node: ${nodeId}<br/>Click for more information`;
    }

    addKeyboardNavigation() {
        document.addEventListener('keydown', (event) => {
            // Alt + number keys for quick navigation
            if (event.altKey) {
                const keyMap = {
                    '1': './README.md',
                    '2': './architecture-overview.md',
                    '3': './documentation-map.md',
                    '4': './development-workflow.md',
                    '5': './user-features-map.md'
                };

                const target = keyMap[event.key];
                if (target) {
                    event.preventDefault();
                    this.navigateToDocument(target);
                }
            }

            // ESC to close any open tooltips
            if (event.key === 'Escape') {
                document.querySelectorAll('.node-info-tooltip').forEach(tooltip => tooltip.remove());
            }
        });
    }

    addBreadcrumbs() {
        const breadcrumbContainer = document.createElement('nav');
        breadcrumbContainer.className = 'documentation-breadcrumb';
        breadcrumbContainer.innerHTML = this.generateBreadcrumbs();

        const mainContent = document.querySelector('main') || document.body;
        mainContent.insertBefore(breadcrumbContainer, mainContent.firstChild);
    }

    generateBreadcrumbs() {
        const breadcrumbMap = {
            'README.md': '🏠 Home',
            'architecture-overview.md': '🏗️ Architecture',
            'documentation-map.md': '📋 Documentation',
            'development-workflow.md': '👩‍💻 Workflow',
            'user-features-map.md': '👤 User Journey'
        };

        const currentTitle = breadcrumbMap[this.currentPage] || this.currentPage;

        return `
            <div class="breadcrumb-nav">
                <a href="./README.md" class="breadcrumb-link">🏠 Documentation Home</a>
                ${this.currentPage !== 'README.md' ? `<span class="breadcrumb-separator">→</span><span class="breadcrumb-current">${currentTitle}</span>` : ''}
            </div>
            <div class="quick-nav">
                <span class="quick-nav-title">Quick Navigation:</span>
                <a href="./architecture-overview.md" class="quick-nav-link" title="Alt+2">🏗️ Architecture</a>
                <a href="./documentation-map.md" class="quick-nav-link" title="Alt+3">📋 Docs Map</a>
                <a href="./development-workflow.md" class="quick-nav-link" title="Alt+4">👩‍💻 Workflow</a>
                <a href="./user-features-map.md" class="quick-nav-link" title="Alt+5">👤 User Journey</a>
            </div>
        `;
    }

    addEnhancedFeatures() {
        this.addSearchFunctionality();
        this.addDarkModeToggle();
        this.addPrintOptimization();
        this.addMobileMenuToggle();
    }

    addSearchFunctionality() {
        const searchContainer = document.createElement('div');
        searchContainer.className = 'doc-search-container';
        searchContainer.innerHTML = `
            <input type="text" id="doc-search" placeholder="Search documentation..." class="doc-search-input">
            <div id="search-results" class="search-results"></div>
        `;

        const breadcrumb = document.querySelector('.documentation-breadcrumb');
        if (breadcrumb) {
            breadcrumb.appendChild(searchContainer);
        }

        // Simple search functionality
        const searchInput = document.getElementById('doc-search');
        const searchResults = document.getElementById('search-results');

        const searchableContent = {
            'README.md': 'Project overview, medical clinic website documentation',
            'architecture-overview.md': 'Django Wagtail PostgreSQL Redis technical architecture',
            'documentation-map.md': 'Documentation structure navigation business technical design',
            'development-workflow.md': 'Development workflow WBS tasks estimates timeline',
            'user-features-map.md': 'User journey features booking appointment patient flow'
        };

        searchInput?.addEventListener('input', (event) => {
            const query = event.target.value.toLowerCase();
            if (query.length < 2) {
                searchResults.style.display = 'none';
                return;
            }

            const results = Object.entries(searchableContent)
                .filter(([file, content]) => content.toLowerCase().includes(query))
                .map(([file]) => file);

            if (results.length > 0) {
                searchResults.innerHTML = results
                    .map(file => `<a href="./${file}" class="search-result-item">${file}</a>`)
                    .join('');
                searchResults.style.display = 'block';
            } else {
                searchResults.style.display = 'none';
            }
        });
    }

    addDarkModeToggle() {
        const toggle = document.createElement('button');
        toggle.className = 'dark-mode-toggle';
        toggle.innerHTML = '🌙';
        toggle.title = 'Toggle dark mode';

        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggle.innerHTML = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        });

        // Restore dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.body.classList.add('dark-mode');
            toggle.innerHTML = '☀️';
        }

        document.body.appendChild(toggle);
    }

    addPrintOptimization() {
        const printStyles = document.createElement('style');
        printStyles.innerHTML = `
            @media print {
                .documentation-breadcrumb,
                .quick-nav,
                .doc-search-container,
                .dark-mode-toggle,
                .node-info-tooltip {
                    display: none !important;
                }

                .mermaid svg {
                    max-width: 100% !important;
                    height: auto !important;
                }
            }
        `;
        document.head.appendChild(printStyles);
    }

    addMobileMenuToggle() {
        // Add responsive navigation for mobile devices
        const mobileStyles = document.createElement('style');
        mobileStyles.innerHTML = `
            @media (max-width: 768px) {
                .quick-nav {
                    display: none;
                }

                .mobile-nav-toggle {
                    display: block;
                    background: #1976d2;
                    color: white;
                    border: none;
                    padding: 8px 12px;
                    border-radius: 4px;
                    cursor: pointer;
                }

                .quick-nav.mobile-open {
                    display: flex;
                    flex-direction: column;
                    position: absolute;
                    background: white;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 8px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                    z-index: 1000;
                }
            }
        `;
        document.head.appendChild(mobileStyles);

        const mobileToggle = document.createElement('button');
        mobileToggle.className = 'mobile-nav-toggle';
        mobileToggle.innerHTML = '📱 Menu';
        mobileToggle.style.display = 'none';

        mobileToggle.addEventListener('click', () => {
            const quickNav = document.querySelector('.quick-nav');
            quickNav?.classList.toggle('mobile-open');
        });

        const breadcrumb = document.querySelector('.breadcrumb-nav');
        breadcrumb?.appendChild(mobileToggle);
    }
}

// Initialize navigation when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new DocumentationNavigator();
});

// Add CSS styles
const styles = document.createElement('style');
styles.innerHTML = `
    .documentation-breadcrumb {
        background: #f5f5f5;
        padding: 12px;
        border-radius: 4px;
        margin-bottom: 20px;
        border-left: 4px solid #1976d2;
    }

    .breadcrumb-nav {
        margin-bottom: 8px;
    }

    .breadcrumb-link {
        color: #1976d2;
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumb-link:hover {
        text-decoration: underline;
    }

    .breadcrumb-separator {
        margin: 0 8px;
        color: #757575;
    }

    .breadcrumb-current {
        font-weight: 600;
        color: #424242;
    }

    .quick-nav {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .quick-nav-title {
        font-size: 12px;
        color: #757575;
        font-weight: 600;
    }

    .quick-nav-link {
        font-size: 12px;
        color: #1976d2;
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 3px;
        background: rgba(25, 118, 210, 0.1);
        transition: background 0.2s;
    }

    .quick-nav-link:hover {
        background: rgba(25, 118, 210, 0.2);
        text-decoration: none;
    }

    .doc-search-container {
        margin-top: 12px;
        position: relative;
    }

    .doc-search-input {
        width: 100%;
        max-width: 300px;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .search-results {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1000;
        max-width: 300px;
    }

    .search-result-item {
        display: block;
        padding: 8px 12px;
        color: #1976d2;
        text-decoration: none;
        border-bottom: 1px solid #eee;
    }

    .search-result-item:hover {
        background: #f5f5f5;
    }

    .search-result-item:last-child {
        border-bottom: none;
    }

    .dark-mode-toggle {
        position: fixed;
        top: 20px;
        right: 20px;
        background: #333;
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 16px;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .dark-mode {
        background: #1a1a1a;
        color: #e0e0e0;
    }

    .dark-mode .documentation-breadcrumb {
        background: #2d2d2d;
        border-left-color: #64b5f6;
    }

    .dark-mode .breadcrumb-link {
        color: #64b5f6;
    }

    .dark-mode .quick-nav-link {
        color: #64b5f6;
        background: rgba(100, 181, 246, 0.1);
    }

    .dark-mode .doc-search-input {
        background: #2d2d2d;
        border-color: #444;
        color: #e0e0e0;
    }

    .dark-mode .search-results {
        background: #2d2d2d;
        border-color: #444;
    }

    .dark-mode .search-result-item {
        color: #64b5f6;
        border-color: #444;
    }

    .node {
        cursor: pointer;
        transition: transform 0.2s, filter 0.2s;
    }

    .node:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
    }

    .mermaid {
        text-align: center;
        margin: 20px 0;
    }

    @media (max-width: 768px) {
        .quick-nav {
            font-size: 11px;
        }

        .doc-search-input {
            font-size: 16px; /* Prevent zoom on iOS */
        }

        .dark-mode-toggle {
            top: 10px;
            right: 10px;
            width: 35px;
            height: 35px;
            font-size: 14px;
        }
    }
`;

document.head.appendChild(styles);