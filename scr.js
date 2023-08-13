      const express = require('express');
      const bodyParser = require('body-parser');
      const nodemailer = require('nodemailer');
      const mysql = require('mysql');

            // Create a MySQL connection
            const connection = mysql.createConnection({
            host: 'localhost',
            user: 'root',
            password: '',
            database: 'contact_db0',
      });

         connection.connect((err) => {
            if (err) {
         console.error('Error connecting to MySQL:', err);
            return;
      }
         console.log('Connected to MySQL');
      });

   const app = express();
   app.set('view engine', 'ejs');
   app.use(bodyParser.urlencoded({ extended: true }));
   app.use(express.static('public'));

   app.get('/', (req, res) => {
   res.render('form');
});


    app.post('/submit', (req, res) => {
    const { name, number, email, specialist, doctor, date } = req.body;

    // Save the form data to the database
      const sql = `INSERT INTO contact_form0 (name, number, email, specialist, doctor, date) VALUES (?, ?, ?, ?, ?, ?)`;
      connection.query(sql, [name, number, email, specialist, doctor, date], (err) => {
    if (err) {
      console.error('Error saving data to MySQL:', err);
      res.send('Error');
    } else {
      // Send email using Nodemailer
      const transporter = nodemailer.createTransport({
        host: 'smtp.elasticemail.com',
        port: 587,
        secure: false,
        auth: {
          user: 'rashidiqbalbih@gmail.com',
          pass: 'BAE6DB226F6C775EAB64FA92C46893C8D60D',
        },
      });

      const mailOptions = {
        from: 'rashidiqbalbih@gmail.com',
        to: 'rk6612262@gmail.com',
        subject: 'Appointment Confirmation',
        html:    `Name: ${name}<br><hr>
                  Phone no: ${number}<br><hr>
                  Email: ${email}<br><hr>
                  Specialist Type: ${specialist}<br><hr>
                  Doctor name: ${doctor}<br><hr>
                  Date-Time: ${date}<br><hr>
                  Message: ${message}<br><hr>`,
      };

        transporter.sendMail(mailOptions, (error, info) => {
          if (error) {
            console.log(error);
          } else {
            console.log('Email sent: ' + info.response);
        }
      });

      res.send('Message Sent Succesfully');
    }
  });
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});