
DELETE FROM tasks;
DELETE FROM users;

INSERT INTO users (id, name, email, password, updated_at,created_at)
VALUES (2, "liz", "fakeuser@gmail.com", "$2y$10$IPZL4D1tBjbe3lyio4dULe4E3IOnlMlEbcCNdm.UEWabPnGD8IiDe","2022-09-22", "2022-09-23" ),
      (3, "elizabeth", "user@librarystop.com", "$2y$10$IPZL4D1tBjbe3lyio4dULe4E3IOnlMlEbcCNdm.UEWabPnGD8IiDe","2022-09-22", "2022-09-23" );

INSERT INTO tasks (id, user_id, title, description, status )
VALUES (1, 2, "example task 1", "A really great task 1", 1),
       (2, 2, "example task 2", "A really great task 2", 0),
       (3, 2, "example task 3", "A really great task 3", 1),
       (4, 3, "example task 4", "A really great 4", 0);


