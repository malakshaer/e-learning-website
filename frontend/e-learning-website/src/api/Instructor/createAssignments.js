import axios from "axios";

const createAssignments = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/createAssignments");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default createAssignments;
