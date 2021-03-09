# Endpoints


## Menampilkan Data Seluruh Pengguna.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/user',
    [
        'headers' => [
            'Authorization' => 'Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3',
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8000/api/user"
);

let headers = {
    "Authorization": "Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Access-Control-Allow-Origin": "*",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3","Content-Type":"application\/json","Accept":"application\/json","Access-Control-Allow-Origin":"*"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
<p>
<label id="auth-GETapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user" data-component="header"></label>
</p>
</form>


## Menyimpan Data Pengguna Baru.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/user',
    [
        'headers' => [
            'Authorization' => 'Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3',
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ],
        'json' => [
            'name' => 'Muhammad Aqil',
            'email' => 'aqilmaulana1@gmail.com',
            'password' => 'password',
            'position' => 'Manager',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8000/api/user"
);

let headers = {
    "Authorization": "Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Access-Control-Allow-Origin": "*",
};

let body = {
    "name": "Muhammad Aqil",
    "email": "aqilmaulana1@gmail.com",
    "password": "password",
    "position": "Manager"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</div>
<div id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</div>
<form id="form-POSTapi-user" data-method="POST" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3","Content-Type":"application\/json","Accept":"application\/json","Access-Control-Allow-Origin":"*"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user" onclick="tryItOut('POSTapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user" onclick="cancelTryOut('POSTapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user</code></b>
</p>
<p>
<label id="auth-POSTapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-user" data-component="body" required  hidden>
<br>
nama pengguna.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-user" data-component="body" required  hidden>
<br>
email pengguna.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-user" data-component="body" required  hidden>
<br>
Password pengguna, terdiri dari minimal 8 karakter.</p>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="POSTapi-user" data-component="body" required  hidden>
<br>
Jabatan pengguna.</p>

</form>


## Memperbaharui data pengguna.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/user/neque',
    [
        'headers' => [
            'Authorization' => 'Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3',
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ],
        'json' => [
            'name' => 'Muhammad Aqilnama pengguna.',
            'email' => 'aqilmaulana1@gmail.com',
            'password' => 'password',
            'position' => 'Manager',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8000/api/user/neque"
);

let headers = {
    "Authorization": "Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Access-Control-Allow-Origin": "*",
};

let body = {
    "name": "Muhammad Aqilnama pengguna.",
    "email": "aqilmaulana1@gmail.com",
    "password": "password",
    "position": "Manager"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user--user-"></code></pre>
</div>
<div id="execution-error-PUTapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user--user-"></code></pre>
</div>
<form id="form-PUTapi-user--user-" data-method="PUT" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3","Content-Type":"application\/json","Accept":"application\/json","Access-Control-Allow-Origin":"*"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-user--user-" onclick="tryItOut('PUTapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-user--user-" onclick="cancelTryOut('PUTapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-PUTapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTapi-user--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-user--user-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-user--user-" data-component="body" required  hidden>
<br>
email pengguna.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="PUTapi-user--user-" data-component="body" required  hidden>
<br>
Password pengguna, terdiri dari minimal 8 karakter.</p>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="PUTapi-user--user-" data-component="body" required  hidden>
<br>
Jabatan pengguna.</p>

</form>


## Menghapus data pengguna.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/user/non',
    [
        'headers' => [
            'Authorization' => 'Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3',
            'Accept' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost:8000/api/user/non"
);

let headers = {
    "Authorization": "Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Access-Control-Allow-Origin": "*",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-user--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-user--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--user-"></code></pre>
</div>
<form id="form-DELETEapi-user--user-" data-method="DELETE" data-path="api/user/{user}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer 6yTtyUK6p76YoKsq1pkoVHSI5ADHu0Uv2hSN17l3","Content-Type":"application\/json","Accept":"application\/json","Access-Control-Allow-Origin":"*"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-user--user-" onclick="tryItOut('DELETEapi-user--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-user--user-" onclick="cancelTryOut('DELETEapi-user--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-user--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/user/{user}</code></b>
</p>
<p>
<label id="auth-DELETEapi-user--user-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-user--user-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-user--user-" data-component="url" required  hidden>
<br>
</p>
</form>



