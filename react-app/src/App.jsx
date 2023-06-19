import { useState } from "react";
import Step1 from "./components/form/Step1";
import Step2 from "./components/form/Step2";
import Step3 from "./components/form/Step3";
import Result from "./components/Result";
import './style.scss'

function App() {
  const [data, setData] = useState({
    grossWages: 0,
    totalProject: 0,
    orders: 0,
    title: '',
    firstName: '',
    lastName: '',
    company: '',
    phone: '',
    email: '',
  });
  const [activeStep, setActiveStep] = useState(1);

  const toggleData = (name, value) => {
    setData((prevState) => ({ ...prevState, [name]: value }));
  };

  const next = (step) => setActiveStep(step);

  console.log(data, activeStep);

  return (
    <div className="app-container">
      {activeStep === 1 && <Step1 data={data} toggleData={toggleData} next={next} />}
      {activeStep === 2 && <Step2 data={data} toggleData={toggleData} next={next} />}
      {activeStep === 3 && <Step3 data={data} next={next} />}
      <Result data={data} step={activeStep} />
    </div>
  );
}

export default App;
