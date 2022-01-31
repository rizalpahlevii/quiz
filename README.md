## APP DOCUMENTATION

---

### Installation

1. Open the terminal, navigate to your directory (htdocs or public_html).

```bash
composer install
```

2. Setting the database configuration, open .env file at project root directory

```
DB_DATABASE=**your_db_name**
DB_USERNAME=**your_db_user**
DB_PASSWORD=**password**
```

3. Clear cache, generate APP KEY, insert dummy data

```bash
php artisan config:cache
php artisan key:generate
php artisan migrate --seed
```

## PUBLIC API DOCUMENTATION

1. respon data product paginated

    **Endpoint :** `/api/publics/products`
    **Example :** `/api/publics/products`

2. respon product, category & product detailnya

    **Endpoint :** `/api/publics/products-with-relations`
    **Example :** `/api/publics/products-with-relations`

3. respon respon data product with sort ordering parameter

    **Endpoint :** `/api/publics/products-with-sort-ordering`
    **Example :** `/api/publics/products-with-sort-ordering?column=id&sort=desc`

    **Params:**

    | Payload name | Required | Validation | Value                            |
    | ------------ | -------- | ---------- | -------------------------------- |
    | `sort`       | requried | string     | desc or asc                      |
    | `column`     | requried | integer    | id, name, price,unit,description |

4. respon respon product & group by category

    **Endpoint :** `/api/publics/products-group-by`
    **Example :** `/api/publics/products-group-by`

## PRIVATE API DOCUMENTATION

1. GET TOKEN

    **Endpoint :** `/api/login`
    **Method :** `POST`

    **Body:**

    | Payload name | Required | Validation | Value          |
    | ------------ | -------- | ---------- | -------------- |
    | `email`      | requried | string     | rizal@mail.com |
    | `password`   | required | string     | 123123         |

    **Response:**

    ```json
    {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9xdWl6LnRlc3RcL2FwaVwvbG9naW4iLCJpYXQiOjE2NDM2MjQwOTUsImV4cCI6MTY0MzYyNzY5NSwibmJmIjoxNjQzNjI0MDk1LCJqdGkiOiJua3VUSkRzSmhCdENoNWliIiwic3ViIjoxLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.oERIS51chfSSkieQbTzoww81V4ixVoj5T-4o3CwHM9A"
    }
    ```

    **Headers:**

    | Header Name   | Value            |
    | ------------- | ---------------- |
    | Authorization | `Bearer {token}` |

2. respon data product paginated

    **Endpoint :** `/api/privates/products`
    **Example :** `/api/privates/products`

3. respon product, category & product detailnya

    **Endpoint :** `/api/privates/products-with-relations`
    **Example :** `/api/privates/products-with-relations`

4. respon respon data product with sort ordering parameter

    **Endpoint :** `/api/privates/products-with-sort-ordering`
    **Example :** `/api/privates/products-with-sort-ordering?column=id&sort=desc`

    **Params:**

    | Payload name | Required | Validation | Value                            |
    | ------------ | -------- | ---------- | -------------------------------- |
    | `sort`       | requried | string     | desc or asc                      |
    | `column`     | requried | integer    | id, name, price,unit,description |

5. respon respon product & group by category

    **Endpoint :** `/api/privates/products-group-by`
    **Example :** `/api/privates/products-group-by`
