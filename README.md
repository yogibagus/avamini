
# Avamini API

A simple and fast avatar API build with a single index.php


## API Reference

#### Endpoint

```http
  https://avamini.decko.my.id/api
```

#### Change Background

```http
  https://avamini.decko.my.id/api?bg=blue
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `bg` | `string` | See the available color bellow |


| Color             | Code                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Blue | blue |
| Red | red |
| Yellow | yellow |
| Green | green |
| Pink | pink |
| Black | dark |
| White (bug) | light |

#### Custom Text

```http
  https://avamini.decko.my.id/api?text=yogi
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `text`      | `string` | Only get first 2 character |


#### Mix

you can also mix it.

```http
  https://avamini.decko.my.id/api?text=yogi&bg=dark
```
## Authors

- [@yogibagus](https://www.github.com/yogibagus)


## License

[MIT](https://choosealicense.com/licenses/mit/)

