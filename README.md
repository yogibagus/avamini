
# Avamini API

A simple and fast avatar generator API build with a single index.php


## API Reference

#### Endpoint

```http
  https://avamini.decko.my.id/api
```

#### Change Color Background

```http
  https://avamini.decko.my.id/api?bg=de2f2f
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `bg` | `string` | Only work with hex color code |


#### Custom Text

```http
  https://avamini.decko.my.id/api?t=yogi
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `t`      | `string` | Only get first 2 character |

#### Change Color Text

```http
  https://avamini.decko.my.id/api?c=de2f2f
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `c`      | `string` | Only work with hex color code |


#### Resize Image

```http
  https://avamini.decko.my.id/api?s=200
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `s`      | `string` | Min 100px and Max 300px |

## Authors

- [@yogibagus](https://www.github.com/yogibagus)


## License

[MIT](https://choosealicense.com/licenses/mit/)

