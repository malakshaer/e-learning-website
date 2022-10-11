import { useState } from "react";

const Button = ({ text, onClick, color }) => {
  return (
    <button className={(color = "red" + " btn")} onClick={onClick}>
      {text}
    </button>
  );
};

Button.defaultProps = {
  text: "Remove",
};

export default Button;
