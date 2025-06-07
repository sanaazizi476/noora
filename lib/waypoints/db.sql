CREATE TABLE articles (
  id INTEGER PRIMARY KEY root,
  title TEXT,
  content TEXT,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);