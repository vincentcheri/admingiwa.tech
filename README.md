# PHP Website CI/CD Pipeline with GitHub Actions

## Project Overview

This project demonstrates the implementation of a basic Continuous Integration and Continuous Deployment (CI/CD) pipeline for a PHP website using **GitHub Actions, SSH and rsync**.

The goal is to automate PHP syntax checking and deployment, reducing the need to manually transfer website files to the production server whenever changes are made.

This is an ongoing project. The current implementation establishes the initial CI/CD workflow, with additional testing, security improvements and deployment enhancements planned.

## Current Implementation

The following components have been implemented:

### 1. GitHub Actions Workflow

Created a GitHub Actions workflow named `mysite-cicd`.

The workflow is configured to trigger on:

- Push events targeting the `main` branch.

### 2. Ubuntu Runner

Configured the workflow to execute on GitHub-hosted Ubuntu runners:

```yaml
runs-on: ubuntu-latest
```

### 3. PHP Environment Setup

Used `shivammathur/setup-php@v2` to install PHP 8.4 on the GitHub Actions runner.

### 4. PHP Syntax Validation

Added a PHP syntax check using:

```bash
php -l rand.php
```

This checks `rand.php` for PHP syntax errors before proceeding to subsequent workflow steps.

### 5. Automated Deployment Using SSH and rsync

Integrated the `fkwdigital/github-workflow-action-ubuntu-rsync@v1` GitHub Action to transfer website files to the production server.

The deployment configuration uses:

- SSH private key authentication.
- SSH passphrase stored in GitHub Secrets.
- Remote server hostname stored in GitHub Secrets.
- Remote username stored in GitHub Secrets.
- Known SSH hosts stored in GitHub Secrets.
- rsync for file synchronization.

**Deployment destination:**

```text
/var/www/admingiwa.tech/html
```

### 6. GitHub Secrets

Sensitive connection details are stored as GitHub repository secrets rather than being hardcoded into the workflow.

The configured secrets include:

- `SSH_PRIVATE_KEY`
- `SSH_PASSPHRASE`
- `REMOTE_HOST`
- `REMOTE_USER`
- `KNOWN_HOSTS`

## Current Deployment Workflow

The current implementation follows this process:

```text
Developer makes changes
          |
          v
Push changes to GitHub
          |
          v
GitHub Actions is triggered
          |
          v
Ubuntu runner checks out repository
          |
          v
PHP 8.4 environment is configured
          |
          v
PHP syntax validation
          |
          v
SSH authentication
          |
          v
rsync transfers website files
          |
          v
Production server updated
```

## Technologies Used

| Technology | Purpose |
|---|---|
| PHP 8.4 | Application runtime and syntax validation |
| Git | Version control |
| GitHub | Source code repository |
| GitHub Actions | CI/CD automation |
| Ubuntu | GitHub Actions runner environment |
| SSH | Secure remote authentication |
| rsync | File synchronization |
| Linux | Production server environment |

## Project Status

**Status: Initial CI/CD implementation completed — ongoing improvements.**

The initial pipeline successfully automates PHP syntax validation and transfers website files from the GitHub repository to the production server.

Further work will focus on improving testing, security, deployment reliability and recovery mechanisms.

## Learning Objectives

Through this project, I aim to strengthen my practical understanding of:

- Continuous Integration and Continuous Deployment.
- Git and GitHub workflows.
- GitHub Actions workflow configuration.
- Linux server administration.
- SSH authentication and secure remote access.
- Automated application deployment.
- Infrastructure and production troubleshooting.

More improvements will be documented as the project progresses.
