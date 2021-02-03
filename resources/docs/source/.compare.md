---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_a610cc23ce422cd2b0ac41fb25bf46be -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/student" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/student"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "All Student",
    "result": []
}
```

### HTTP Request
`GET student`


<!-- END_a610cc23ce422cd2b0ac41fb25bf46be -->

<!-- START_9db1a3f38cc404b5bdfcad196c0a4acd -->
## student/store
> Example request:

```bash
curl -X POST \
    "http://localhost/student/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/student/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST student/store`


<!-- END_9db1a3f38cc404b5bdfcad196c0a4acd -->

<!-- START_fa128427607b8ea833481e10d6029b50 -->
## student/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/student/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/student/get/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "Student Detail",
    "data": null
}
```

### HTTP Request
`GET student/get/{id}`


<!-- END_fa128427607b8ea833481e10d6029b50 -->

<!-- START_004874186e819cb3d7587daa69f433c2 -->
## student/update/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/student/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/student/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT student/update/{id}`


<!-- END_004874186e819cb3d7587daa69f433c2 -->

<!-- START_0e78356c8fd821ae009a395883f20900 -->
## student/delete/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/student/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/student/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE student/delete/{id}`


<!-- END_0e78356c8fd821ae009a395883f20900 -->

<!-- START_15d1f8ae98931d9f98d8fb165e4a1e7b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/kelas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/kelas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "All Kelas",
    "result": []
}
```

### HTTP Request
`GET kelas`


<!-- END_15d1f8ae98931d9f98d8fb165e4a1e7b -->

<!-- START_f48d161a382396c293d74c891dc70865 -->
## kelas/store
> Example request:

```bash
curl -X POST \
    "http://localhost/kelas/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/kelas/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST kelas/store`


<!-- END_f48d161a382396c293d74c891dc70865 -->

<!-- START_334a6156e9699ecc7b3b7ed407458d45 -->
## kelas/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/kelas/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/kelas/get/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "Kelas Detail",
    "data": null
}
```

### HTTP Request
`GET kelas/get/{id}`


<!-- END_334a6156e9699ecc7b3b7ed407458d45 -->

<!-- START_1f6d7b88324b77ce9732346980bcd09b -->
## kelas/update/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/kelas/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/kelas/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT kelas/update/{id}`


<!-- END_1f6d7b88324b77ce9732346980bcd09b -->

<!-- START_7b9c1e36f607408940515e560198798f -->
## kelas/delete/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/kelas/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/kelas/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE kelas/delete/{id}`


<!-- END_7b9c1e36f607408940515e560198798f -->

<!-- START_cb1d6e945379472717e181883d6af459 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/attendance" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/attendance"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "All Attendance",
    "result": []
}
```

### HTTP Request
`GET attendance`


<!-- END_cb1d6e945379472717e181883d6af459 -->

<!-- START_c82d90bd0d961bef3c140b44675d44df -->
## attendance/store
> Example request:

```bash
curl -X POST \
    "http://localhost/attendance/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/attendance/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST attendance/store`


<!-- END_c82d90bd0d961bef3c140b44675d44df -->

<!-- START_904388f7adcb5056510427b715595797 -->
## attendance/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/attendance/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/attendance/get/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "Attendance Detail",
    "data": null
}
```

### HTTP Request
`GET attendance/get/{id}`


<!-- END_904388f7adcb5056510427b715595797 -->

<!-- START_fb96bd3610b36d496bd9c561bf1cf178 -->
## attendance/update/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/attendance/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/attendance/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT attendance/update/{id}`


<!-- END_fb96bd3610b36d496bd9c561bf1cf178 -->

<!-- START_a3ddd1cbf45f5440382e515886f21d46 -->
## attendance/delete/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/attendance/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/attendance/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE attendance/delete/{id}`


<!-- END_a3ddd1cbf45f5440382e515886f21d46 -->

<!-- START_3da229c4b4668d366b276c2e067cec54 -->
## excul
> Example request:

```bash
curl -X GET \
    -G "http://localhost/excul" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/excul"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "All Extracurricular",
    "result": []
}
```

### HTTP Request
`GET excul`


<!-- END_3da229c4b4668d366b276c2e067cec54 -->

<!-- START_ef96e7cd2c63e037c94c66b7cb37cd06 -->
## excul/store
> Example request:

```bash
curl -X POST \
    "http://localhost/excul/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/excul/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST excul/store`


<!-- END_ef96e7cd2c63e037c94c66b7cb37cd06 -->

<!-- START_597334ee82a5e60aea931292e7874e3c -->
## excul/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/excul/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/excul/get/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "Extracurricular Detail",
    "data": []
}
```

### HTTP Request
`GET excul/get/{id}`


<!-- END_597334ee82a5e60aea931292e7874e3c -->

<!-- START_16d3da5ba2f1fdf779639d3dcaa1eceb -->
## excul/update/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/excul/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/excul/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT excul/update/{id}`


<!-- END_16d3da5ba2f1fdf779639d3dcaa1eceb -->

<!-- START_da6f1b65ec1f2f3b7a0c14dbeeebc557 -->
## excul/delete/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/excul/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/excul/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE excul/delete/{id}`


<!-- END_da6f1b65ec1f2f3b7a0c14dbeeebc557 -->

<!-- START_4c64a1c9cf636292f1ad8b06b96fc578 -->
## bk
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bk" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bk"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "All Konseling",
    "result": []
}
```

### HTTP Request
`GET bk`


<!-- END_4c64a1c9cf636292f1ad8b06b96fc578 -->

<!-- START_af2e9f3de9cb72597fe532339cddf46b -->
## bk/store
> Example request:

```bash
curl -X POST \
    "http://localhost/bk/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bk/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST bk/store`


<!-- END_af2e9f3de9cb72597fe532339cddf46b -->

<!-- START_88f758d4670430624c67add122c3f059 -->
## bk/get/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bk/get/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bk/get/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "status": 200,
    "message": "Konseling Detail",
    "data": []
}
```

### HTTP Request
`GET bk/get/{id}`


<!-- END_88f758d4670430624c67add122c3f059 -->

<!-- START_dd4d409ad62beca8db5ed5bb2063938e -->
## bk/update/{id}
> Example request:

```bash
curl -X PUT \
    "http://localhost/bk/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bk/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT bk/update/{id}`


<!-- END_dd4d409ad62beca8db5ed5bb2063938e -->

<!-- START_272bc27c3e44e424aa97da67313a6349 -->
## bk/delete/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/bk/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bk/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE bk/delete/{id}`


<!-- END_272bc27c3e44e424aa97da67313a6349 -->


