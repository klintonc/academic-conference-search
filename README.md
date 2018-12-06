# Academic Conference Search

A single-page web app for searching academic conferences by name or abbreviation. For each search, it shows:

- **Description**: conference papers, venue and dates from the IEEE Xplore API
- **Video**: related conference videos from the YouTube Data API
- **Twitter**: recent tweets about the conference, each with a **sentiment analysis** chart (positive / negative / neutral) generated in PHP

This was **Project 2 for ITCS210 Web Programming** at the Faculty of ICT, Mahidol University (MUICT), in 2018. The original brief is in [docs/project-brief.pdf](docs/project-brief.pdf).

![Homepage](docs/screenshot.png)

## Tech stack

HTML, CSS, Bootstrap, JavaScript, jQuery and PHP. Sentiment analysis uses [phpInsight](https://github.com/JWHennessey/phpInsight).

As the brief requires, two web services (IEEE and YouTube) are called from the browser, and one (Twitter) is called server-side in PHP. The PHP endpoint returns rendered HTML via AJAX.

## Project structure

```
.
├── index.php              # The single page
├── config.example.php     # Template for API keys (copy to config.php)
├── api/
│   ├── twitter.php        # Server-side Twitter search + sentiment charts
│   └── sentiment.php      # Sentiment score of ?msg= as JSON
├── assets/
│   ├── css/               # Bootstrap + custom styles
│   └── js/                # jQuery + search logic (IEEE, YouTube, Twitter)
├── lib/
│   ├── config.php         # Loads config.php
│   └── TwitterAPIExchange.php
├── examples/
│   └── sentiment-demo.php # Sentiment analysis on sample sentences
└── docs/                  # Project brief and screenshot
```

## How to run

You need **PHP 7+** and **Composer**.

1. Install dependencies:
   ```bash
   composer install
   ```
2. Add your API keys:
   ```bash
   cp config.example.php config.php
   ```
   Then fill in the keys in `config.php`. This file is git-ignored.
3. Start the PHP built-in server from the project root:
   ```bash
   php -S localhost:8000
   ```
4. Open http://localhost:8000.

### Try the sentiment analysis without any API keys

```bash
php examples/sentiment-demo.php
```

With the server running, you can also open:
- http://localhost:8000/examples/sentiment-demo.php
- http://localhost:8000/api/sentiment.php?msg=This%20conference%20was%20amazing

## Note

This is a 2018 student project. The search uses APIs that have changed since then. In particular, the free Twitter v1.1 search API no longer exists, so the Twitter tab needs a paid X API plan to work.
