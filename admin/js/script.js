$("#remember").change(() => {
  //   console.log(1);
  const showHidePass = $("#Show--Hide--pass--admin");
  const passwordAdminSignin = $("#password--admin--signin");
  if ($("#remember").is(":checked")) {
    showHidePass.html("Hide Password");
    passwordAdminSignin.attr("type", "text");
  } else {
    showHidePass.html("Show Password");
    passwordAdminSignin.attr("type", "password");
  }
});
