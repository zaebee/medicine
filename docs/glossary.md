---
layout: documentation
title: "Билингвальный глоссарий"
nav_title: "Глоссарий"
description: "Интерактивный словарь технических терминов проекта на русском и английском языках"
icon: "📚"
permalink: /glossary/
mermaid_theme: "default"
footer_text: "Билингвальная система терминологии"
custom_css: |
  .glossary-container {
    max-width: 1400px;
    margin: 0 auto;
  }

  .glossary-controls {
    background: var(--quote-bg);
    border-radius: 12px;
    padding: 24px;
    margin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    align-items: center;
  }

  .search-box {
    flex: 1;
    min-width: 300px;
    position: relative;
  }

  .search-input {
    width: 100%;
    padding: 12px 16px 12px 44px;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    background: var(--card-bg);
    color: var(--text-primary);
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .search-input:focus {
    outline: none;
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
  }

  .search-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 18px;
  }

  .category-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .category-filter {
    padding: 8px 16px;
    border: 2px solid var(--border-color);
    border-radius: 20px;
    background: var(--card-bg);
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    white-space: nowrap;
  }

  .category-filter:hover,
  .category-filter.active {
    border-color: var(--accent-color);
    background: var(--accent-color);
    color: white;
  }

  .stats-bar {
    background: var(--card-bg);
    border-radius: 8px;
    padding: 16px;
    margin-bottom: 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
    box-shadow: 0 2px 8px var(--card-shadow);
  }

  .stats-item {
    text-align: center;
  }

  .stats-number {
    font-size: 24px;
    font-weight: bold;
    color: var(--accent-color);
    display: block;
  }

  .stats-label {
    font-size: 12px;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .glossary-grid {
    display: grid;
    gap: 16px;
  }

  .category-section {
    background: var(--card-bg);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 16px var(--card-shadow);
    transition: all 0.3s ease;
  }

  .category-header {
    background: linear-gradient(135deg, var(--accent-color), #764ba2);
    color: white;
    padding: 20px 24px;
    display: flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .category-header:hover {
    background: linear-gradient(135deg, #5a6fd8, #6a4190);
  }

  .category-icon {
    font-size: 24px;
  }

  .category-title {
    font-size: 20px;
    font-weight: 600;
    flex: 1;
  }

  .category-count {
    background: rgba(255, 255, 255, 0.2);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
  }

  .category-collapse {
    font-size: 18px;
    transition: transform 0.3s ease;
  }

  .category-section.collapsed .category-collapse {
    transform: rotate(-90deg);
  }

  .terms-list {
    padding: 0;
    max-height: 600px;
    overflow-y: auto;
    transition: all 0.3s ease;
  }

  .category-section.collapsed .terms-list {
    max-height: 0;
    padding: 0;
  }

  .term-item {
    padding: 16px 24px;
    border-bottom: 1px solid var(--border-color);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .term-item:last-child {
    border-bottom: none;
  }

  .term-item:hover {
    background: var(--quote-bg);
  }

  .term-item.hidden {
    display: none;
  }

  .term-languages {
    flex: 1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .term-lang {
    padding: 12px;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .term-lang.russian {
    background: linear-gradient(135deg, #e3f2fd, #bbdefb);
    border-left: 4px solid #2196f3;
  }

  .term-lang.english {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    border-left: 4px solid #9c27b0;
  }

  [data-theme="dark"] .term-lang.russian {
    background: linear-gradient(135deg, #1a237e, #283593);
  }

  [data-theme="dark"] .term-lang.english {
    background: linear-gradient(135deg, #4a148c, #6a1b9a);
  }

  .term-lang-label {
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: var(--text-light);
    margin-bottom: 4px;
  }

  .term-text {
    font-size: 16px;
    font-weight: 500;
    color: var(--text-primary);
    line-height: 1.4;
  }

  .term-actions {
    display: flex;
    gap: 8px;
  }

  .term-action {
    padding: 8px;
    border-radius: 6px;
    background: var(--quote-bg);
    color: var(--text-secondary);
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
    font-size: 14px;
  }

  .term-action:hover {
    background: var(--accent-color);
    color: white;
  }

  .no-results {
    text-align: center;
    padding: 60px 20px;
    color: var(--text-light);
  }

  .no-results-icon {
    font-size: 48px;
    margin-bottom: 16px;
    opacity: 0.5;
  }

  @media (max-width: 768px) {
    .glossary-controls {
      flex-direction: column;
      align-items: stretch;
    }

    .search-box {
      min-width: auto;
    }

    .category-filters {
      justify-content: center;
    }

    .term-languages {
      grid-template-columns: 1fr;
      gap: 12px;
    }

    .stats-bar {
      text-align: center;
    }

    .stats-item {
      flex: 1;
    }
  }
---

# 📚 Билингвальный глоссарий

Интерактивный словарь технических терминов, используемых в проекте. Все термины представлены на русском и английском языках для обеспечения единообразия терминологии.

<div class="glossary-container">
  <div class="glossary-controls">
    <div class="search-box">
      <span class="search-icon">🔍</span>
      <input type="text" id="searchInput" class="search-input" placeholder="Поиск терминов..." autocomplete="off">
    </div>
    <div class="category-filters" id="categoryFilters">
      <button class="category-filter active" data-category="all">Все категории</button>
      <button class="category-filter" data-category="ui">UI/Интерфейс</button>
      <button class="category-filter" data-category="project">Проект</button>
      <button class="category-filter" data-category="technical">Технологии</button>
      <button class="category-filter" data-category="features">Функции</button>
      <button class="category-filter" data-category="security">Безопасность</button>
      <button class="category-filter" data-category="development">Разработка</button>
      <button class="category-filter" data-category="console">Консоль</button>
      <button class="category-filter" data-category="meta">Мета</button>
    </div>
  </div>

  <div class="stats-bar">
    <div class="stats-item">
      <span class="stats-number" id="totalTerms">0</span>
      <span class="stats-label">Всего терминов</span>
    </div>
    <div class="stats-item">
      <span class="stats-number" id="visibleTerms">0</span>
      <span class="stats-label">Отображается</span>
    </div>
    <div class="stats-item">
      <span class="stats-number" id="categoriesCount">9</span>
      <span class="stats-label">Категорий</span>
    </div>
  </div>

  <div class="glossary-grid" id="glossaryGrid">
    <!-- Categories will be populated by JavaScript -->
  </div>

  <div class="no-results" id="noResults" style="display: none;">
    <div class="no-results-icon">🔍</div>
    <h3>Термины не найдены</h3>
    <p>Попробуйте изменить поисковый запрос или выбрать другую категорию.</p>
  </div>
</div>

<script>
// Glossary data and functionality
const glossaryData = {{ site.data.glossary | jsonify }};

const categoryInfo = {
  ui: { icon: '🖥️', title: 'UI/Интерфейс', description: 'Элементы пользовательского интерфейса' },
  project: { icon: '🏗️', title: 'Проект', description: 'Термины, связанные с проектом' },
  technical: { icon: '⚙️', title: 'Технологии', description: 'Технический стек и инструменты' },
  features: { icon: '✨', title: 'Функции', description: 'Возможности и характеристики' },
  security: { icon: '🔐', title: 'Безопасность', description: 'Защита и соответствие стандартам' },
  development: { icon: '👩‍💻', title: 'Разработка', description: 'Процессы разработки' },
  console: { icon: '💻', title: 'Консоль', description: 'Сообщения консоли и отладка' },
  meta: { icon: '📋', title: 'Мета', description: 'Метаданные и документация' }
};

let currentFilter = 'all';
let currentSearch = '';

function initGlossary() {
  renderCategories();
  setupEventListeners();
  updateStats();
}

function renderCategories() {
  const grid = document.getElementById('glossaryGrid');
  grid.innerHTML = '';

  Object.keys(categoryInfo).forEach(categoryKey => {
    const category = categoryInfo[categoryKey];
    const terms = glossaryData[categoryKey] || {};
    const termCount = Object.keys(terms).length;

    if (termCount === 0) return;

    const categorySection = document.createElement('div');
    categorySection.className = 'category-section';
    categorySection.setAttribute('data-category', categoryKey);

    categorySection.innerHTML = `
      <div class="category-header" onclick="toggleCategory('${categoryKey}')">
        <span class="category-icon">${category.icon}</span>
        <span class="category-title">${category.title}</span>
        <span class="category-count">${termCount}</span>
        <span class="category-collapse">▼</span>
      </div>
      <div class="terms-list">
        ${Object.keys(terms).map(termKey => {
          const term = terms[termKey];
          return `
            <div class="term-item" data-term-key="${termKey}" data-category="${categoryKey}">
              <div class="term-languages">
                <div class="term-lang russian">
                  <div class="term-lang-label">Русский</div>
                  <div class="term-text">${term.ru}</div>
                </div>
                <div class="term-lang english">
                  <div class="term-lang-label">English</div>
                  <div class="term-text">${term.en}</div>
                </div>
              </div>
              <div class="term-actions">
                <button class="term-action" onclick="copyTerm('${categoryKey}.${termKey}')" title="Копировать ключ">📋</button>
                <button class="term-action" onclick="highlightTerm('${categoryKey}-${termKey}')" title="Выделить">✨</button>
              </div>
            </div>
          `;
        }).join('')}
      </div>
    `;

    grid.appendChild(categorySection);
  });
}

function setupEventListeners() {
  // Search functionality
  const searchInput = document.getElementById('searchInput');
  searchInput.addEventListener('input', (e) => {
    currentSearch = e.target.value.toLowerCase();
    filterTerms();
  });

  // Category filters
  document.querySelectorAll('.category-filter').forEach(filter => {
    filter.addEventListener('click', (e) => {
      document.querySelectorAll('.category-filter').forEach(f => f.classList.remove('active'));
      e.target.classList.add('active');
      currentFilter = e.target.getAttribute('data-category');
      filterTerms();
    });
  });
}

function toggleCategory(categoryKey) {
  const section = document.querySelector(`[data-category="${categoryKey}"]`);
  section.classList.toggle('collapsed');
}

function filterTerms() {
  let visibleCount = 0;

  // Show/hide categories
  document.querySelectorAll('.category-section').forEach(section => {
    const categoryKey = section.getAttribute('data-category');
    const shouldShowCategory = currentFilter === 'all' || currentFilter === categoryKey;

    if (!shouldShowCategory) {
      section.style.display = 'none';
      return;
    }

    section.style.display = 'block';

    // Show/hide terms within category
    const terms = section.querySelectorAll('.term-item');
    let categoryHasVisibleTerms = false;

    terms.forEach(term => {
      const termKey = term.getAttribute('data-term-key');
      const category = glossaryData[categoryKey];
      const termData = category[termKey];

      const matchesSearch = !currentSearch ||
        termData.ru.toLowerCase().includes(currentSearch) ||
        termData.en.toLowerCase().includes(currentSearch) ||
        termKey.toLowerCase().includes(currentSearch);

      if (matchesSearch) {
        term.classList.remove('hidden');
        visibleCount++;
        categoryHasVisibleTerms = true;
      } else {
        term.classList.add('hidden');
      }
    });

    // Hide category if no terms match
    if (!categoryHasVisibleTerms) {
      section.style.display = 'none';
    }
  });

  // Show/hide no results message
  const noResults = document.getElementById('noResults');
  noResults.style.display = visibleCount === 0 ? 'block' : 'none';

  // Update visible count
  document.getElementById('visibleTerms').textContent = visibleCount;
}

function updateStats() {
  let totalTerms = 0;
  Object.values(glossaryData).forEach(category => {
    totalTerms += Object.keys(category).length;
  });

  document.getElementById('totalTerms').textContent = totalTerms;
  document.getElementById('visibleTerms').textContent = totalTerms;
}

function copyTerm(termPath) {
  navigator.clipboard.writeText(`{% include t.html term="${termPath}" %}`).then(() => {
    // Visual feedback
    event.target.textContent = '✅';
    setTimeout(() => {
      event.target.textContent = '📋';
    }, 1000);
  });
}

function highlightTerm(termId) {
  // Remove existing highlights
  document.querySelectorAll('.term-item').forEach(item => {
    item.style.background = '';
  });

  // Add highlight
  const term = document.querySelector(`[data-term-key="${termId.split('-')[1]}"][data-category="${termId.split('-')[0]}"]`);
  if (term) {
    term.style.background = 'var(--accent-color)';
    term.style.color = 'white';
    term.scrollIntoView({ behavior: 'smooth', block: 'center' });

    setTimeout(() => {
      term.style.background = '';
      term.style.color = '';
    }, 2000);
  }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', initGlossary);

// Add search keyboard shortcuts
document.addEventListener('keydown', (e) => {
  if ((e.ctrlKey || e.metaKey) && e.key === 'f') {
    e.preventDefault();
    document.getElementById('searchInput').focus();
  }

  if (e.key === 'Escape') {
    document.getElementById('searchInput').value = '';
    currentSearch = '';
    filterTerms();
  }
});

console.log('📚 Glossary loaded with', Object.keys(glossaryData).length, 'categories');
console.log('🔍 Use Ctrl+F to search, Esc to clear');
</script>