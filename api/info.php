<html>
    <head>
        <title>API Sportorg</title>
        <style>
            body{
                font-family: sans-serif;
                padding: 10px;
            }
            h1 {
                font-weight: normal;
                font-size: 44px;
                line-height: 50px;
                margin: 0 0 10px 0;
                padding: 0;
            }
            h4, h4 {
               font-size: 18px;
            }
            .h4, .h5, .h6, h4, h5, h6 {
                margin-top: 10px;
                margin-bottom: 10px;
                font-weight: 500;
                line-height: 1.1;
                font-family: inherit;
                color: inherit;
            }
            body, p, a, div, th, td {
                font-size: 14px;
                color:#333;
            }
            h1 {
                font-family: sans-serif;
                font-weight: 600;
                font-size: 24px;
                line-height: 26px;
                margin-top: 3rem;
                margin-bottom: 3rem;
            }
            h2 {
                font-family:  sans-serif;
                font-weight: 600;
                font-size: 18px;
                line-height: 24px;
                margin: 10px 0 10px 0;
            }
            code {
                color: #fff;
                background: #2d2d2d;
                font-family:  monospace;
                padding: 1rem;
                border-radius: 5px;
                margin-top: 10px;
                margin-bottom: 10px;
                display: block;
            }
            th {
                background-color: #f5f5f5;
                text-align: left;
                font-family:  sans-serif;
                font-weight: 700;
                padding: 10px;
                border: #e0e0e0 1px solid;
}

td {
    vertical-align: top;
    padding: 10px;
    border: #e0e0e0 1px solid;
}
    table {
        border-collapse: collapse;
    }
    .type {
            font-weight: 600;
            font-size: 15px;
            display: inline-block;
            margin: 0 0 5px 0;
            padding: 4px 5px;
            border-radius: 6px;
            text-transform: uppercase;
            background-color: #4070ec;
            color: #ffffff;
    }
    .type__get {
    background-color: green;
}

        </style>    
    </head>    
    <body>
        <h1>Опис API Sportorg</h1>
        <h4>Даний опис присвячено API Sportorg, яке дає можливість інтегруватися і працювати   із замовленнями, товарами, а також вести переписку і контролювати свій баланс безпосередньо.</h4>
        <div>Для роботи з API використовується логін і пароль, що були видані Вам для доступу до Особистого кабінету. </div>
        
        <article>
            <h1>Пошук товара</h1>
        </article> 
        <!--span class="type type__post">post</span-->
        <span class="type type__get">get</span>
        <code>http://localhost/api/?username=test&password=wew323223Sss&search=8413</code>
        <h2>Request Body Parameters</h2>
        
        
        <table>
            <thead>
              <tr><th style="width: 30%">Назва</th><th style="width: 10%">Тип</th><th style="width: 60%">Опис</th></tr>
            </thead>
            <tbody>
              <tr><td class="code">username</td><td>String</td><td><p>Ім'я користувача</p></td></tr>
              <tr><td class="code">password</td><td>String</td><td><p>Пароль в base64()</p></td></tr>
              <tr><td class="code">search</td><td>String</td><td><p>Код товару або його назва</p></td></tr>
            </tbody>
      </table>
      <h2>Success 200</h2>  
      
      <table>
            <thead>
              <tr><th style="width: 30%">Назва</th><th style="width: 10%">Тип</th><th style="width: 60%">Опис</th></tr>
            </thead>
            <tbody>
              <tr><td class="code">code</td><td>String</td><td><p>Внутрішній код товару</p></td></tr>
              <tr><td class="code">name</td><td>String</td><td><p>Назва</p></td></tr>
              <tr><td class="code">price</td><td>Float</td><td><p>Ціна</p></td></tr>
              <tr><td class="code">min</td><td>Number</td><td><p>Мін. кількість</p></td></tr>
              <tr><td class="code">max</td><td>Number</td><td><p>Макс. кількість</p></td></tr>
              <tr><td class="code">discont</td><td>String</td><td><p>Знижка</p></td></tr>
            </tbody>
      </table>
       
      
      <div class="tab-content">
        <div class="tab-pane active" id="success-examples-Authorization-PostSites-0_0_2-0">
        <pre data-type="json" class="  language-json"><code>HTTP/<span class="token number">1.1</span> <span class="token number">200</span> OK
{
  "success": true,
  "products": [
    {
      "code": 8413,
      "name": "Пневматична гвинтівка Optima Mod.135",
      "price": "12172"
    }
  ]
}

        </code></pre>
        </div>
      </div>
      
      
        
        
        <article>
            <h1>Опис помилок</h1>
        </article> 
        
        <table>
        <thead>
          <tr>
          <th>Назва</th>
          <th>Опис</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="code">incorrect_username_password</td><td>Неправильний логін або пароль</td>
          </tr>
         
        </tbody>
      </table>
        
    </body>
</html>