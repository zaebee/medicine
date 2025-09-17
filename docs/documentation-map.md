# 📋 Documentation Structure & Navigation Map

> **Interactive Documentation Map**: Click on any document to navigate directly to it

```mermaid
graph TB
    %% Styling
    classDef business fill:#e3f2fd,stroke:#1976d2,stroke-width:2px
    classDef technical fill:#f3e5f5,stroke:#7b1fa2,stroke-width:2px
    classDef design fill:#e8f5e8,stroke:#388e3c,stroke-width:2px
    classDef development fill:#fff3e0,stroke:#f57c00,stroke-width:2px
    classDef deployment fill:#fce4ec,stroke:#c2185b,stroke-width:2px
    classDef overview fill:#fff8e1,stroke:#f57f17,stroke-width:3px

    %% Main Overview
    README[📋 README.md<br/>Project Overview]

    %% Business Documentation
    subgraph "💼 Business Documentation"
        BRIEF[📄 brief.md<br/>Commercial Brief]
        QUESTIONS[❓ client_questions.md<br/>Priority Questions]
        PROJECTDATA[📊 project_data.json<br/>Specifications]
    end

    %% Technical Documentation
    subgraph "🔧 Technical Documentation"
        TECHARCH[🏗️ technical_architecture.md<br/>System Architecture]
        CMSCOMP[⚙️ cms_comparison.md<br/>CMS Analysis]
        SECURITY[🛡️ security_compliance.md<br/>Security & GDPR]
    end

    %% Design Documentation
    subgraph "🎨 Design Documentation"
        UXREQ[🎯 ux_design_requirements.md<br/>UX/UI Guidelines]
    end

    %% Development Documentation
    subgraph "👩‍💻 Development Documentation"
        TASKS[📋 tasks_estimates.md<br/>WBS & Estimates]
        TEMPLATES[📝 brd_prd_frd_templates.md<br/>Requirement Templates]
    end

    %% Deployment Documentation
    subgraph "🚀 Deployment Documentation"
        TESTING[🧪 testing_acceptance.md<br/>Testing & Acceptance]
        SEOMARKETING[📈 seo_marketing.md<br/>SEO & Marketing]
    end

    %% Interactive Diagrams
    subgraph "📊 Interactive Diagrams"
        ARCHDIAG[🏗️ architecture-overview.md<br/>System Architecture]
        DOCMAP[📋 documentation-map.md<br/>This Document]
        WORKFLOW[👩‍💻 development-workflow.md<br/>Development Process]
        USERJOURNEY[👤 user-features-map.md<br/>User Journey]
    end

    %% Dependencies and References
    README --> BRIEF
    README --> TECHARCH
    README --> TASKS

    BRIEF --> QUESTIONS
    BRIEF --> PROJECTDATA

    TECHARCH --> CMSCOMP
    TECHARCH --> SECURITY
    TECHARCH --> UXREQ

    TASKS --> TEMPLATES
    TASKS --> TESTING

    TESTING --> SEOMARKETING

    UXREQ --> WORKFLOW
    ARCHDIAG --> DOCMAP
    WORKFLOW --> USERJOURNEY

    %% Cross-references
    BRIEF -.-> TECHARCH
    QUESTIONS -.-> CMSCOMP
    PROJECTDATA -.-> TASKS
    SECURITY -.-> TESTING
    UXREQ -.-> SEOMARKETING

    %% Apply styles
    class BRIEF,QUESTIONS,PROJECTDATA business
    class TECHARCH,CMSCOMP,SECURITY technical
    class UXREQ design
    class TASKS,TEMPLATES development
    class TESTING,SEOMARKETING deployment
    class README,ARCHDIAG,DOCMAP,WORKFLOW,USERJOURNEY overview

    %% Click navigation
    click README href "./README.md" "Main Project Overview"
    click BRIEF href "./business/brief.md" "Commercial Project Brief"
    click QUESTIONS href "./business/client_questions.md" "Client Questions"
    click PROJECTDATA href "./business/project_data.json" "Project Specifications"
    click TECHARCH href "./technical/technical_architecture.md" "Technical Architecture"
    click CMSCOMP href "./technical/cms_comparison.md" "CMS Comparison"
    click SECURITY href "./technical/security_compliance.md" "Security & Compliance"
    click UXREQ href "./design/ux_design_requirements.md" "UX/UI Requirements"
    click TASKS href "./development/tasks_estimates.md" "Tasks & Estimates"
    click TEMPLATES href "./development/brd_prd_frd_templates.md" "Requirement Templates"
    click TESTING href "./deployment/testing_acceptance.md" "Testing & Acceptance"
    click SEOMARKETING href "./deployment/seo_marketing.md" "SEO & Marketing"
    click ARCHDIAG href "./architecture-overview.md" "Architecture Overview"
    click WORKFLOW href "./development-workflow.md" "Development Workflow"
    click USERJOURNEY href "./user-features-map.md" "User Journey Map"
```

## 📚 Documentation Organization by Team Role

### 👔 Project Managers & Stakeholders
**Start Here**: Essential business documents for project planning
- [📄 brief.md](./business/brief.md) - Complete commercial project brief
- [📊 project_data.json](./business/project_data.json) - Machine-readable specifications
- [📋 tasks_estimates.md](./development/tasks_estimates.md) - Work breakdown & estimates

### 👨‍💻 Backend Developers & System Architects
**Technical Foundation**: Architecture and implementation guides
- [🏗️ technical_architecture.md](./technical/technical_architecture.md) - Complete system architecture
- [⚙️ cms_comparison.md](./technical/cms_comparison.md) - CMS technology analysis
- [🛡️ security_compliance.md](./technical/security_compliance.md) - Security requirements

### 🎨 UI/UX Designers & Frontend Developers
**Design System**: User experience and interface guidelines
- [🎯 ux_design_requirements.md](./design/ux_design_requirements.md) - Complete UX/UI specifications
- [📈 seo_marketing.md](./deployment/seo_marketing.md) - Content and marketing strategy
- [👤 user-features-map.md](./user-features-map.md) - User journey visualization

### 🧪 QA Engineers & DevOps
**Quality Assurance**: Testing and deployment procedures
- [🧪 testing_acceptance.md](./deployment/testing_acceptance.md) - Testing criteria & acceptance
- [🛡️ security_compliance.md](./technical/security_compliance.md) - Security testing requirements
- [🏗️ architecture-overview.md](./architecture-overview.md) - Infrastructure overview

## 🔄 Document Workflow & Dependencies

```mermaid
flowchart LR
    A[Business Requirements] --> B[Technical Design]
    B --> C[Development Planning]
    C --> D[Implementation]
    D --> E[Testing & Deployment]

    A1[brief.md] -.-> B1[technical_architecture.md]
    A2[client_questions.md] -.-> B2[cms_comparison.md]
    B1 -.-> C1[tasks_estimates.md]
    B2 -.-> C2[brd_prd_frd_templates.md]
    C1 -.-> D1[ux_design_requirements.md]
    D1 -.-> E1[testing_acceptance.md]
    E1 -.-> E2[seo_marketing.md]
```

## 🎯 Quick Access by Project Phase

| Phase | Primary Documents | Supporting Docs |
|-------|------------------|-----------------|
| **Planning** | brief.md, client_questions.md | project_data.json |
| **Architecture** | technical_architecture.md | cms_comparison.md, security_compliance.md |
| **Design** | ux_design_requirements.md | brief.md |
| **Development** | tasks_estimates.md | brd_prd_frd_templates.md |
| **Testing** | testing_acceptance.md | security_compliance.md |
| **Launch** | seo_marketing.md | testing_acceptance.md |

## 🔍 Document Search Index

### By Content Type
- **📊 Data Models**: technical_architecture.md
- **💰 Budget & Timeline**: tasks_estimates.md, brief.md
- **🎨 Design System**: ux_design_requirements.md
- **🔒 Security Requirements**: security_compliance.md
- **📈 Marketing Strategy**: seo_marketing.md
- **❓ Open Questions**: client_questions.md

### By Priority Level
- **🔴 Critical**: brief.md, technical_architecture.md, tasks_estimates.md
- **🟡 Important**: ux_design_requirements.md, security_compliance.md
- **🟢 Supporting**: cms_comparison.md, testing_acceptance.md, seo_marketing.md

## 🧭 Navigation Tips

1. **Start with README.md** for project overview
2. **Use diagrams** for visual navigation between related docs
3. **Follow cross-references** (links and arrows) for related content
4. **Check dependencies** before diving deep into technical docs
5. **Use role-based sections** to find relevant documentation quickly

---

> **Interactive Features**: Click on any document name in the diagram above to navigate directly to it. Use the role-based sections to find documentation relevant to your responsibilities.