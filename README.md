# SoSo-Studio-Hobby

**Project Overview**  
SoSo Studio Hobby aims to bring the art of rug-making online by offering custom commissions, interactive workshops, and showcasing a gallery of unique textile designs.

**Tech Stack**  
- PHP
- WordPress
- MySQL
- HTML
- CSS
- JS

## Getting Started

To get started with the project, clone the repo:

git clone https://github.com/your-username/your-repo-name

For example: git clone https://github.com/Rising8/SoSo-Studio

## Branching Strategy

- **main**: This is the main branch, and it should always be deployable.
- **feature/branch-name**: Create a branch for each feature you're working on. 

### Steps to follow:
1. **Pull the latest changes before working**:
    ```bash
    git checkout main
    git pull origin main
    ```

2. **Create your feature branch** (replace `branch-name` with the feature you’re working on):
    ```bash
    git checkout -b feature/branch-name
    ```

3. **Make your changes** and commit them:
    ```bash
    git add .
    git commit -m "Your commit message"
    ```

4. **Push your changes to GitHub**:
    ```bash
    git push origin feature/branch-name
    ```

5. **Create a Pull Request (PR)** from your feature branch into `main` when you're done.
    - Ensure you review your code before creating the PR.

---

## Commit Message Guidelines

We follow a simple format for commit messages to keep history clean and clear. Use this format when committing:

type(scope): short description

### Common commit types:

- feat: a new feature (e.g., feat(workshops): add signup form)  
- fix: a bug fix (e.g., fix(header): correct mobile menu)  
- chore: routine tasks or maintenance (e.g., chore: update dependencies)  
- docs: documentation changes only  
- style: formatting and styling (no code changes)  
- refactor: code changes without new features or fixes  
- test: adding or fixing tests  
- perf: performance improvements  

### Example commits:

git commit -m "feat(gallery): add new rug showcase section"  
git commit -m "fix(auth): resolve login bug"  
git commit -m "chore: cleanup unused assets"

---

## Merging & Conflicts

When your PR is approved:
1. **Pull the latest changes** from `main` into your branch:
    ```bash
    git checkout main
    git pull origin main
    git checkout feature/branch-name
    git merge main
    ```

2. Resolve any conflicts that may come up, commit the changes, and then push again.

3. **Push your feature branch to GitHub**:
    ```bash
    git push origin feature/branch-name
    ```

4. **Create a Pull Request** to merge back into the `main` branch once your changes are ready.

---

## Useful Git Commands

- Check current branch:

    git branch


- Switch branches:

    git checkout branch-name


- Check status (see staged/unstaged changes):

    git status


- Pull changes from the remote:

    git pull origin branch-name


- Push your local commits:

    git push origin branch-name


- Delete a branch (locally and remotely):

    git branch -d branch-name     # Delete local branch
    git push origin --delete branch-name   # Delete remote branch

---

## Best Practices

- Always pull the latest changes before starting any work.
- Keep your commits small and meaningful (e.g., "Add login feature" instead of "Fix stuff").
- If you're unsure about something, ask for a review before merging.
- Avoid force-pushing to shared branches like main (use --force only when absolutely necessary).

---

## Additional Notes

- Be mindful of merge conflicts: If you’re working on the same file as someone else, communicate and try to avoid conflicts.
- If you encounter any issues with Git, please ask in our team chat!

---

This structure helps set expectations, keeps everyone aligned, and prevents chaos with Git workflows! It also makes sure everyone knows how to handle things like merging, conflicts, and syncing with the main branch.