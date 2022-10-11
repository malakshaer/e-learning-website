import { useState } from "react";
// import { useNavigate } from "react-router-dom";

const EnrollButton = ({ text, onClick, color }) => {
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

EnrollButton.defaultProps = {
  text: "Enroll Now",
};

export default EnrollButton;
