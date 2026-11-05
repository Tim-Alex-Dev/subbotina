# Git

Applies to every session, local and cloud.

## Authorship

- Tim Alex <timalexdev@gmail.com> is the only author, committer and contributor of this repository.
- Before every commit check `git config user.name` and `git config user.email`. If they differ (cloud sessions start
  with their own identity), set them for this repo first:
  `git config user.name "Tim Alex"` and `git config user.email "timalexdev@gmail.com"`.
- Never add `Co-Authored-By`, `Claude-Session` or any other Claude/Anthropic trailer or credit to commit messages,
  PR titles/bodies, code comments or READMEs. `.claude/settings.json` turns Claude Code's own attribution off
  (`"attribution": { "commit": "", "pr": "" }`): keep it that way.
- If a commit with another author or trailer is found, tell Tim; rewriting pushed history needs his OK.

## Branches

- Work on `develop` (or a feature branch from it); `master` only gets merges. Commit or push only when Tim asks.
