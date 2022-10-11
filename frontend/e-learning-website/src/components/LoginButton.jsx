import React from "react";
import "../App.css";

const LoginButton = ({ text, onClick, color }) => {
  return (
    <button className={color + " btn"} onClick={onClick}>
      {text}
    </button>
  );
};

LoginButton.defaultProps = {
  text: "Login",
};
export default LoginButton;
