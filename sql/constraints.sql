--- article ----
ALTER TABLE article
  ADD CONSTRAINT fk_article_to_user FOREIGN KEY (user_id) REFERENCES users;