<title>Contact</title>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Yantramanav:100,300');

/* ------------- */
/* GLOBAL STYLES */
/* ------------- */

* {
  box-sizing: border-box;
}

body {
  background: #3952a3;
  color: #485e74;

}

.container {
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

ul {
  list-style: none;
  padding: 0;
}

.brand {
  text-align: center;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.brand span {
  color: #ffffff;
}

.wrapper {
  box-shadow: 0 0 20px 0 rgba(57, 82, 163, 0.7);
}

.wrapper > * {
  padding: 1em;
}

/* ------------------- */
/* COMPANY INFORMATION */
/* ------------------- */

.company-info {
  background: #C3C9DD;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.company-info h3,
.company-info ul {
  text-align: center;
  margin: 0 0 1rem 0;
}

/* ------- */
/* CONTACT */
/* ------- */

.contact {
  background: #dcdfea;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}

/* ---- */
/* FORM */
/* ---- */

.contact form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.contact form label {
  display: block;
}

.contact form p {
  margin: 0;
}

.contact form .full {
  grid-column: 1 / 3;
}

.contact form button,
.contact form input,
.contact form textarea {
  width: 100%;
  padding: 1em;
  border: solid 1px #627EDC;
  border-radius: 4px;
}

.contact form textarea {
  resize: none;
}

.contact form button {
  background: #627EDC;
  border: 0;
  color: #e4e4e4;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: bold;
}

.contact form button:hover,
.contact form button:focus {
  background: #3952a3;
  color: #ffffff;
  outline: 0;
  transition: background-color 2s ease-out;
}

/* ------------- */
/* MEDIA QUERIES */
/* ------------- */

@media only screen and (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }

  .wrapper > * {
    padding: 2em;
  }

  .company-info {
    border-radius: 4px 0 0 4px;
  }

  .contact {
    border-radius: 0 4px 4px 0;
  }

  .company-info h3,
  .company-info ul,
  .brand {
    text-align: left;
  }
}
</style>