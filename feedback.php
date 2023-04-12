<h1>Feedback Form</h1>
<form method="POST" action="thankyou.php">
    Name: <input type="text" name="complete_name" /><br />
    Email Address: <input type="email" name="email" /><br />
    Type:
    <select name="type">
    <option value="Inquiry">Inquiry</option>
    <option value="Feedback">Feedback</option>
    <option value="Other">Other</option>
    </select>
    <br />
    <div style="display:flex;align-items:center;">
        Level of satisfaction (0 to 10):&nbsp;
        <input type="range" name="satisfaction_level" min="0" max="10" step="1">
    </div>
    <br />
    Message: <br />
    <textarea name="message" style="width:100%;height:100px;"></textarea><br />
    <button>Submit</button>
</form>


<style>
    /* Body */
    body {
        background-color: #f2f2f2;
        font-family: 'San Francisco', sans-serif;
    }

    /* Header */
    h1 {
        text-align: center;
        margin-top: 50px;
        color: #444;
    }

    /* Form */
    form {
        max-width: 600px;
        margin: 0 auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
    }

    /* Form Input Fields */
    input[type="text"],
    input[type="email"],
    input[type=""],
    select,
    input[type="range"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 35px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
        font-size: 16px
    }

    /* Form Button */
    button {
        background-color: #008000;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    button:hover {
        background-color: #006600;
    }

    /* Debug Section */
    pre {
        margin-top: 20px;
        padding: 10px;
        background-color: #f2f2f2;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>
