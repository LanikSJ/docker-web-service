# Contributing

We welcome contributions to this Docker-based web service project!
Please take a moment to review this document to understand how you can
contribute effectively.

## Getting Started

When contributing to this repository, please first discuss the change you
wish to make via
[GitHub Issues](https://github.com/LanikSJ/docker-web-service/issues),
email, or any other method with the repository maintainers before making a
change.

Please note we have a code of conduct, please follow it in all your
interactions with the project.

## Development Environment Setup

To set up a development environment for contributing to this Docker web
service:

### Prerequisites

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
  (optional, for local testing)
- Git

### Local Development

1. **Clone the repository:**

   ```bash
   git clone https://github.com/LanikSJ/docker-web-service.git
   cd docker-web-service
   ```

2. **Build the Docker image locally:**

   ```bash
   docker build -t docker-web-service .
   ```

3. **Run the container for testing:**

   ```bash
   docker run -p 8080:80 docker-web-service
   ```

4. **Access the web service:**
   Open your browser to `http://localhost:8080`

### Testing Your Changes

- **Build and verify:** Ensure your changes build successfully
- **Security scan:** Run security scans on your Docker image
- **Multi-platform test:** Test on different platforms if applicable
- **Base image compatibility:** Verify compatibility with the base
  [docker-php-alpine](https://github.com/LanikSJ/docker-php-alpine) image

## Issue Reporting

When reporting bugs or requesting features:

1. **Check existing issues:** Search
   [GitHub Issues](https://github.com/LanikSJ/docker-web-service/issues) first
2. **Use issue templates:** Follow the provided issue templates for bugs,
   features, or questions
3. **Provide context:** Include Docker version, OS, and steps to reproduce
   issues
4. **Docker-specific details:** For Docker-related issues, include:

   - Docker version and platform
   - Container logs (`docker logs <container_id>`)
   - Image build output
   - Network configuration if relevant

## Pull Request Process

1. **Clean up dependencies:** Ensure any install or build dependencies are
   removed before the end of the layer when doing a build
2. **Update documentation:** Update the README.md with details of changes to
   the interface, including new environment variables, exposed ports, useful
   file locations, and container parameters
3. **Version bumping:** Increase the version numbers in any examples files
   and the README.md to the new version that this Pull Request would
   represent. The versioning scheme we use is [SemVer](https://semver.org/)
4. **Testing requirements:** All PRs must pass CI checks including:
   - Docker image build
   - Security scanning
   - Automated tests (if applicable)
5. **Review process:** You may merge the Pull Request once you have the
   sign-off of two other developers, or if you do not have permission to do
   that, you may request the second reviewer to merge it for you

### Pull Request Checklist

- [ ] Builds successfully without errors
- [ ] Passes security scans
- [ ] Includes tests for new functionality
- [ ] Updates documentation as needed
- [ ] Follows existing code and Docker best practices
- [ ] Tested on multiple platforms/architectures
- [ ] Includes breaking change notes if applicable

## Docker Best Practices

When contributing Docker-related changes:

- **Layer optimization:** Minimize layer count and optimize for build caching
- **Security:** Follow container security best practices
- **Base image:** Changes to the Dockerfile should consider compatibility
  with the base image
- **Multi-stage builds:** Consider using multi-stage builds for optimization
- **Labels:** Include appropriate Docker labels for metadata
- **Health checks:** Add health checks where appropriate

## Code of Conduct

### Our Pledge

In the interest of fostering an open and welcoming environment, we as
contributors and maintainers pledge to make participation in our project
and our community a harassment-free experience for everyone, regardless of
age, body size, disability, ethnicity, gender identity and expression, level
of experience, nationality, personal appearance, race, religion, or sexual
identity and orientation.

### Our Standards

Examples of behavior that contributes to creating a positive environment
include:

- Using welcoming and inclusive language
- Being respectful of differing viewpoints and experiences
- Gracefully accepting constructive criticism
- Focusing on what is best for the community
- Showing empathy towards other community members

Examples of unacceptable behavior by participants include:

- The use of sexualized language or imagery and unwelcome sexual attention
  or advances
- Trolling, insulting/derogatory comments, and personal or political attacks
- Public or private harassment
- Publishing others' private information, such as a physical or electronic
  address, without explicit permission
- Other conduct which could reasonably be considered inappropriate in a
  professional setting

### Our Responsibilities

Project maintainers are responsible for clarifying the standards of
acceptable behavior and are expected to take appropriate and fair
corrective action in response to any instances of unacceptable behavior.

Project maintainers have the right and responsibility to remove, edit, or
reject comments, commits, code, wiki edits, issues, and other contributions
that are not aligned to this Code of Conduct, or to ban temporarily or
permanently any contributor for other behaviors that they deem
inappropriate, threatening, offensive, or harmful.

### Scope

This Code of Conduct applies both within project spaces and in public spaces
when an individual is representing the project or its community. Examples of
representing a project or community include using an official project e-mail
address, posting via an official social media account, or acting as an
appointed representative at an online or offline event. Representation of a
project may be further defined and clarified by project maintainers.

### Enforcement

Instances of abusive, harassing, or otherwise unacceptable behavior may be
reported by contacting the project team at
[forums.lanik.us](https://forums.lanik.us). All complaints will be reviewed
and investigated and will result in a response that is deemed necessary and
appropriate to the circumstances. The project team is obligated to maintain
confidentiality with regard to the reporter of an incident. Further details
of specific enforcement policies may be posted separately.

Project maintainers who do not follow or enforce the Code of Conduct in good
faith may face temporary or permanent repercussions as determined by other
members of the project's leadership.

### Attribution

This Code of Conduct is adapted from the [Contributor Covenant][homepage],
version 1.4, available at
<https://www.contributor-covenant.org/version/1/4/code-of-conduct/>

[homepage]: https://www.contributor-covenant.org
