import axios from "axios";

const getInstructors = async () => {
  try {
    const result = await axios.get("http://127.0.0.1:8000/getInstructors");
    const data = await result.json();
    return data;
  } catch (error) {
    return "ERROR";
  }
};

export default getInstructors;
