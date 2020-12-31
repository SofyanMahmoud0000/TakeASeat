# Uesr


## api/user/register




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user/register?first_name=quidem&last_name=neque&username=et&email=autem&password=odio&password_confirmed=voluptatem&birthday=aut&gender=tempora&role=consequatur&city=eveniet&address=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/register"
);

let params = {
    "first_name": "quidem",
    "last_name": "neque",
    "username": "et",
    "email": "autem",
    "password": "odio",
    "password_confirmed": "voluptatem",
    "birthday": "aut",
    "gender": "tempora",
    "role": "consequatur",
    "city": "eveniet",
    "address": "quas",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "email": [
        "The email must be a valid email address."
    ],
    "password": [
        "The password must be at least 8 characters.",
        "The password confirmation does not match."
    ],
    "birthday": [
        "The birthday is not a valid date."
    ],
    "role": [
        "The selected role is invalid."
    ]
}
```
<div id="execution-results-POSTapi-user-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-register"></code></pre>
</div>
<div id="execution-error-POSTapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-register"></code></pre>
</div>
<form id="form-POSTapi-user-register" data-method="POST" data-path="api/user/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-register" onclick="tryItOut('POSTapi-user-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-register" onclick="cancelTryOut('POSTapi-user-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>password_confirmed</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmed" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>gender</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-user-register" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-user-register" data-component="query"  hidden>
<br>
optional</p>
</form>


## api/user/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/user/login?email=necessitatibus&password=fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/login"
);

let params = {
    "email": "necessitatibus",
    "password": "fugit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
 "token": "token_value",
 "token_type": "token_type
}
```
<div id="execution-results-POSTapi-user-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-user-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-login"></code></pre>
</div>
<div id="execution-error-POSTapi-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-login"></code></pre>
</div>
<form id="form-POSTapi-user-login" data-method="POST" data-path="api/user/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-user-login" onclick="tryItOut('POSTapi-user-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-user-login" onclick="cancelTryOut('POSTapi-user-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-user-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/user/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-user-login" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-user-login" data-component="query" required  hidden>
<br>
</p>
</form>



