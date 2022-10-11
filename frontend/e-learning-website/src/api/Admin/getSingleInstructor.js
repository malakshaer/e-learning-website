import axios from "axios";

const getSingleInstructor = async () => {
  try {
    const result = await axios.get(
      "http://127.0.0.1:8000/getSingleInstructor/{id}"
    );
    const data = await result.json();
    return data;
  } catch (error) {
    return "ERROR";
  }
};

export default getSingleInstructor;
