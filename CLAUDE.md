# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Jekyll-powered documentation website** for a medical clinic development project. The site automatically generates styled HTML documentation from Markdown files using GitHub Actions and deploys to GitHub Pages at https://medicine.zae.life.

**Current Status**: Live documentation site with automated Jekyll deployment.

## Technology Stack

- **Jekyll 4.3.0** - Static site generator with GitHub Pages compatibility
- **Ruby 3.1+ / Bundler** - Dependency management
- **GitHub Actions** - Automated deployment pipeline
- **Mermaid.js** - Interactive diagrams and flowcharts
- **Custom HTML/CSS/JavaScript** - Responsive design and navigation
- **GitHub Pages** - Hosting with custom domain

## Development Commands

All Jekyll commands must be run from the `docs/` directory:

```bash
# Navigate to Jekyll site root
cd docs

# Install Ruby dependencies (first time setup)
bundle install

# Local development server with auto-reload
bundle exec jekyll serve --livereload

# Local development (basic)
bundle exec jekyll serve

# Build for production
bundle exec jekyll build

# Clean generated files
bundle exec jekyll clean

# Check Jekyll/GitHub Pages compatibility
bundle exec github-pages health-check
```

## Project Architecture

### Directory Structure
```
docs/                          # Jekyll site root
├── _config.yml               # Jekyll configuration
├── _layouts/
│   ├── default.html          # Minimal layout for SEO/feed plugins
│   └── documentation.html    # Custom layout template
├── Gemfile                   # Ruby dependencies (GitHub Pages compatible)
├── index.html                # Interactive homepage
├── {page}.md                 # Documentation pages with Jekyll frontmatter
├── business/                 # Business documentation (markdown)
├── technical/                # Technical documentation (markdown)
├── design/                   # Design documentation (markdown)
├── development/              # Development documentation (markdown)
└── deployment/               # Deployment documentation (markdown)
```

### Key Components

**Jekyll Configuration (`_config.yml`)**
- Site metadata and build settings
- Plugin configuration (jekyll-feed, jekyll-sitemap, jekyll-seo-tag)
- Repository configuration for GitHub Pages SEO
- Custom collections and defaults
- GitHub Pages compatibility settings

**Custom Layout (`_layouts/documentation.html`)**
- Responsive design template for all documentation pages
- Mermaid.js integration with configurable themes
- Keyboard navigation (Alt+1-5) support
- Custom CSS with gradient backgrounds and interactive elements

**Content Management Pattern**
All documentation pages use Jekyll frontmatter:
```yaml
---
layout: documentation
title: "Page Title"
nav_title: "Navigation Title"
description: "Page description for SEO"
icon: "📋"
permalink: /page-url/
mermaid_theme: "default"  # Optional
footer_text: "Custom footer"  # Optional
---
```

## Deployment Workflow

**Automated GitHub Actions** (`.github/workflows/pages.yml`):
1. Triggers on push to `main` branch
2. Sets up Ruby 3.1 environment with bundler caching
3. Builds Jekyll site with production settings
4. Deploys to GitHub Pages with custom domain

**Manual Deployment**:
- Push changes to `main` branch
- GitHub Actions automatically builds and deploys
- Site updates at https://medicine.zae.life within 2-3 minutes

## Content Development

### Adding New Documentation Pages

1. Create new `.md` file in appropriate directory
2. Add Jekyll frontmatter with required fields
3. Write content in Markdown with optional Mermaid diagrams
4. Link from other pages using Jekyll `relative_url` filter

### Interactive Features

**Keyboard Navigation**:
- Alt+1: Main Documentation (`/readme/`)
- Alt+2: Architecture Overview (`/architecture-overview/`)
- Alt+3: Documentation Map (`/documentation-map/`)
- Alt+4: Development Workflow (`/development-workflow/`)
- Alt+5: User Features Map (`/user-features-map/`)

**Mermaid Diagrams**:
```yaml
---
mermaid_theme: "default"
mermaid_config: |
  gantt: {
    titleTopMargin: 25,
    barHeight: 20
  }
---
```

```markdown
## Diagram Title
\`\`\`mermaid
graph TD
    A[Start] --> B[Process]
    B --> C[End]
\`\`\`
```

### Content Language and Conventions

- **Documentation content**: Written in Russian with English technical terms
- **Code and configurations**: English
- **Icons**: Emoji icons used for visual navigation (🏥, 📋, 🏗️, etc.)
- **File naming**: kebab-case for URLs, descriptive names for files

## Domain and Hosting

- **Live URL**: https://medicine.zae.life
- **Custom domain**: Configured via `CNAME` file
- **SSL**: Automatically provided by GitHub Pages
- **CDN**: GitHub's global CDN for fast loading

## Important Notes

- **Never edit generated `_site/` directory** - it's overwritten on each build
- **Always test locally** with `bundle exec jekyll serve` before pushing
- **Mermaid diagrams require specific syntax** - test rendering locally
- **Front matter is required** for all documentation pages
- **GitHub Actions build logs** available in repository Actions tab for debugging
- **Site uses custom JavaScript** for interactive navigation and Mermaid initialization

## Troubleshooting

**Build failures**: Check GitHub Actions logs for Ruby/Jekyll errors
**Repository errors**: Ensure `repository: zaebee/medicine` is set in `_config.yml`
**Layout errors**: Use `layout: documentation` for content pages, `layout: default` for index
**Mermaid diagrams not rendering**: Verify syntax and frontmatter configuration
**Navigation issues**: Ensure permalink values match navigation JavaScript
**Local development issues**: Run `bundle install` and check Ruby version compatibility

## Recent Fixes Applied

- Added `repository: zaebee/medicine` to `_config.yml` for GitHub Pages SEO support
- Created `_layouts/default.html` for basic layout with SEO and feed plugin support
- Updated GitHub Actions to use Ruby 3.1 for better compatibility
- Fixed GitHub Pages deployment issues with missing repository configuration