<div id="ac-form-em-breve" class="_form_16"></div>
<script
  src="https://conquistandosuavaga.activehosted.com/f/embed.php?id=16"
  type="text/javascript"
  charset="utf-8"
></script>
<script>
  const utm_source = "<?php print($utm_source); ?>";
  const utm_medium = "<?php print($utm_medium); ?>";
  const utm_campaign = "<?php print($utm_campaign); ?>";
  const utm_term = "<?php print($utm_term); ?>";
  const utm_content = "<?php print($utm_content); ?>";
  const fullNameField = document.getElementById("fullname");
  const emailField = document.getElementById("email");
  const buttonSubmit = document.getElementById("_form_16_submit");
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
  const updateCustomField = () =>
    fetch(
      `/update-ac-metadata.php?email=${email}&fname=${firstName}&lname=${lastName}&utm_source=${utm_source}&utm_medium=${utm_medium}&utm_campaign=${utm_campaign}&utm_term=${utm_term}&utm_content=${utm_content}`
    )
      .then((resp) => resp.text())
      .then(console.log)
      .catch(console.log);

  buttonSubmit.addEventListener("click", (evt) => updateCustomField());
</script>
