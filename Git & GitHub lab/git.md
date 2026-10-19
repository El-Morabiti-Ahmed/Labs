---
marp: true
theme: default
paginate: true
header: 'Git & GitHub Fundamentals'
footer: 'Best Practices for Project Integration'
style: |
  section {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 40px;
    background-color: #0d1117;
    color: #c9d1d9;
  }
  h1, h2, h3 {
    color: #58a6ff;
  }
  h1 {
    font-size: 2.2em;
  }
  h2 {
    font-size: 1.6em;
    border-bottom: 1px solid #30363d;
    padding-bottom: 8px;
  }
  code {
    background-color: #161b22;
    color: #7ee787;
    padding: 2px 6px;
    border-radius: 4px;
  }
  pre {
    background-color: #161b22;
    border: 1px solid #30363d;
    border-radius: 6px;
    padding: 12px;
  }
  pre code {
    background-color: transparent;
    padding: 0;
  }
  strong {
    color: #f0883e;
  }
  blockquote {
    background: #161b22;
    border-left: 4px solid #1f6feb;
    color: #8b949e;
    padding: 8px 16px;
    margin: 10px 0;
  }
---

<!-- Slide 1: Title -->
# Mastering Git & GitHub
### Fundamentals, Workflows, & Project Integration

**Presented by:** El Morabiti Ahmed  
**Focus:** Building a solid standard for code management.

---

<!-- Slide 2: Why Version Control? -->
## Why Version Control Matters

* **Time Travel for Code:** Track history, restore prior states, and debug regressions quickly.
* **Seamless Collaboration:** Multiple developers working on the same codebase without overwriting files.
* **Experimentation Safety:** Feature branches allow isolated testing without breaking the production build.
* **Single Source of Truth:** Centralized state tracking for the entire team.

---

<!-- Slide 3: Git vs GitHub -->
## Git vs. GitHub: Knowing the Difference

| Feature | **Git** | **GitHub** |
| :--- | :--- | :--- |
| **Type** | Distributed Version Control System | Cloud-based hosting platform |
| **Location** | Runs locally on your machine | Hosted on remote servers |
| **Core Function** | Tracks code history & changes | Enhances Git with UI, PRs, CI/CD |
| **Interface** | Command Line Interface (CLI) | Web Dashboard & Desktop App |

---

<!-- Slide 4: Git Architecture -->
## Understanding the 3 Main States

Git operates across three primary environments on your local machine:

1. **Working Directory:** Where you actively write and edit code.
2. **Staging Area (`Index`):** A buffer zone where changes are selected/organized before saving.
3. **Local Repository (`.git`):** The local database storing committed snapshots.

> **Workflow:** `Working Directory` $\rightarrow$ `git add` $\rightarrow$ `Staging Area` $\rightarrow$ `git commit` $\rightarrow$ `Local Repository`

---

<!-- Slide 5: Essential Core Commands -->
## Core Git Commands Cheat Sheet

```bash
# Initialize a local repository in the current folder
git init

# Check status of changed, staged, and untracked files
git status

# Stage specific files or all changes
git add index.php
git add .

# Create a commit snapshot with a clear message
git commit -m "feat: implement user authentication endpoint"