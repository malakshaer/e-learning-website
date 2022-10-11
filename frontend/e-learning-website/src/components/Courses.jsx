import React from "react";
import CourseCard from "./CourseCard";

const coursesData = [
  {
    id: "01",
    title: "Web Design BootCamp-2022 for Beginners",
    lesson: 12,
    students: 12.5,
    rating: 5.9,
  },

  {
    id: "02",
    title: "Professional Graphics Design, PhotoShop, Adobe XD, Figma",
    lesson: 12,
    students: 12.5,
    rating: 5.9,
  },

  {
    id: "03",
    title: "UI/UX BootCamp for Beginners in 2022",
    lesson: 12,
    students: 12.5,
    rating: 5.9,
  },
];

const Courses = () => {
  return (
    <div>
      <h1 className="headers">————— Our New Courses —————</h1>
      <div className="courses-cards">
        {coursesData.map((item) => (
          <div>
            <CourseCard key={item.id} item={item} />
          </div>
        ))}
      </div>
    </div>
  );
};
export default Courses;
