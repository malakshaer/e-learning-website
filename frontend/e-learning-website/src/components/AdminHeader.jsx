import React, { useRef } from "react";
import "../App.css";

const navLinks = [
  {
    display: "Instructors",
    url: "#",
  },
  {
    display: "Students",
    url: "#",
  },

  {
    display: "Courses",
    url: "#",
  },
  {
    display: "SignOut",
    url: "#",
  },
];

const Header = () => {
  const menuRef = useRef();
  const menuToggle = () => menuRef.current.classList.toggle("active__menu");

  return (
    <div className="top-nav-bar">
      <div className="nav-bar-logo">
        <h2>LearningMS</h2>
      </div>
      <div>
        <div ref={menuRef} onClick={menuToggle}>
          <ul className="nav__list">
            {navLinks.map((item, index) => (
              <li key={index} className="nav__item">
                <a href={item.url}>{item.display}</a>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </div>
  );
};
export default Header;
