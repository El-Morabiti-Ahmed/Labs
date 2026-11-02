---
marp: true
---


# Antigravity
## 1. What is Antigravity?

An AI-driven development environment where autonomous agents plan, write code, execute commands, and verify software deliverables under human supervision.

---

## 2. Core Concepts

| Concept | Role & Function | Location / Config |
|---|---|---|
| **Agent** | Autonomous decision engine that plans, executes, and verifies code. | Built-in / Runtime |
| **Rules** | Persistent, always-on guidelines governing agent behavior and constraints. | `.agents/rules/` |
| **Skills** | Modular capabilities dynamically loaded when relevant to a task. | `.agents/skills/` |
| **Workflows** | Sequenced execution steps combining prompts, rules, and skills. | Prompt / Pipelines |

---

## 3. Workflow

**Plan → Review → Execute → Verify**

1. **Plan**: Request a step-by-step proposal before modifying files (`/plan`).
2. **Review**: Inspect and refine the plan prior to execution.
3. **Execute**: Allow the agent to make code changes and run terminal commands.
4. **Verify**: Test and validate the resulting output independently.

---

## 4. Prompt Structure

```text
Goal: [What to build, refactor, or fix]
Context: [Project stack, framework, database, language]
Scope: [Files/folders to edit, zones to avoid]
Constraints: [Style guidelines, required packages, security rules]
Process: Present a plan first, then await approval before execution.
Done when: [Verification conditions, tests pass, UI behavior]
Output: Provide a concise summary of all changes made.