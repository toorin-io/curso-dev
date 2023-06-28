<div id="ac-form-aula" class="_form_16">
  <style>
    div#cform_16 div {
      display: flex;
      flex-direction: column;
    }
    div#cform_16 label {
      margin-top: 20px;
      margin-bottom: 10px;
    }
    div#cform_16 input {
      width: 340px;
    }
    div#cform_16 input:focus-visible {
      outline: none;
    }
    div#cform_16 button {
      margin-top: 20px;
      border-radius: 25px;
      border-color: transparent;
    }
  </style>
  <div id="cform_16">
    <div>
      <label for="fullname">Nome</label>
      <input placeholder="Seu nome" type="text" name="fullname" id="fullname">
    </div>
    <div>
      <label for="email">Email</label>
      <input placeholder="Seu melhor email" type="email" name="email" id="email">
    </div>
    <button id="cform_16_submit">Quero assistir à aula!</button>
  </div>
</div>
<!-- <script
  src="https://conquistandosuavaga.activehosted.com/f/embed.php?id=16"
  type="text/javascript"
  charset="utf-8"
></script> -->
<script>
  const utm_source = "<?php print($utm_source); ?>";
  const utm_medium = "<?php print($utm_medium); ?>";
  const utm_campaign = "<?php print($utm_campaign); ?>";
  const utm_term = "<?php print($utm_term); ?>";
  const utm_content = "<?php print($utm_content); ?>";
  const lead_origin = "<?php print($lead_origin); ?>";
  const fullNameField = document.getElementById("fullname");
  const emailField = document.getElementById("email");
  const buttonSubmit = document.getElementById("cform_16_submit");
  let email = "";
  let firstName = "";
  let lastName = "";

  emailField.addEventListener("change", (evt) => {
    email = evt.target.value;
  });
  fullNameField.addEventListener("change", (evt) => {
    const name = evt.target.value;
    [firstName, lastName] = name.split(" ", 1);
  });
  const createContact = async () => {
    try {
      const resp = await fetch(
        `/ac-create-contact.php?email=${email}&fname=${firstName}&lname=${lastName}`
      );
      const data = await resp.text();
      console.log(data);
    } catch (e) {
      console.log(e);
    }
  }

  const updateContact = async () => {
    try {
      const resp = await fetch(
        `/ac-update-contact.php?email=${email}&fname=${firstName}&lname=${lastName}&utm_source=${utm_source}&utm_medium=${utm_medium}&utm_campaign=${utm_campaign}&utm_term=${utm_term}&utm_content=${utm_content}&origin=${lead_origin}`
      );
      const data = await resp.text();
      console.log(data);
    } catch (e) {
      console.log(e);
    }
  }

  buttonSubmit.addEventListener("click", async (evt) => {
    await createContact();
    await updateContact();
  });
</script>
