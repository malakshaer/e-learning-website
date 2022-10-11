import React from "react";
import EnrollButton from "./EnrollButton";

const CourseCard = (props) => {
  const { title, lesson, students, rating } = props.item;

  return (
    <div className="single__course__item">
      <div className="course__details">
        <h6 className="course__title mb-4">{title}</h6>

        <div className=" d-flex justify-content-between align-items-center">
          <p className="lesson d-flex align-items-center gap-1">
            <i class="ri-book-open-line"></i> {lesson} Lessons
          </p>

          <p className="students d-flex align-items-center gap-1">
            <i class="ri-user-line"></i>Number of Students: {students}K
          </p>
        </div>

        <div className=" d-flex justify-content-between align-items-center">
          <p className="rating d-flex align-items-center gap-1">
            <i class="ri-star-fill"></i>Rating: {rating}K
          </p>

          <p className="enroll d-flex align-items-center gap-1">
            <EnrollButton />
          </p>
        </div>
      </div>
    </div>
  );
};

export default CourseCard;
