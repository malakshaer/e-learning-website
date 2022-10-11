import { useState } from "react";
// import { useNavigate } from "react-router-dom";

const Button = ({ text, onClick, color }) => {
  //   const navigate = useNavigate();

  //   const navigateToFooter = () => {
  //     navigate("./Footer");
  //   };

  return (
    <button className={color + " btn"} onClick={onClick}>
      {text}
    </button>
  );
};

Button.defaultProps = {
  text: "Create Free Account",
};

export default Button;
