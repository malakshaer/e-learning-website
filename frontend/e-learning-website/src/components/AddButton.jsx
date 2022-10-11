import { useState } from "react";

const Button = ({ text, onClick, color }) => {
  return (
    <button className={color + " btn"} onClick={onClick}>
      {text}
    </button>
  );
};

Button.defaultProps = {
  text: "Add",
};

export default Button;
