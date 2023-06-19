import React from "react";
import { Input } from "../shared/Fields";

function Step1({ toggleData, data, next }) {
  return (
    <div className="step-container">
      <div className="stepper stepper-1" />

      <div className="title">Eligible Wages</div>
      <Input
        id="grossWages"
        name="grossWages"
        label="Total gross wages of R&D employees/year:"
        onChange={(e) => toggleData("grossWages", Number(e.target.value))}
        value={data?.grossWages}
        icon={<div style={{ color: "#EC6839", fontWeight: "600" }}>€</div>}
        placeholder="000 000,00"
        type="number"
      />
      <Input
        id="totalProject"
        name="totalProject"
        label="Total project months (No limit to the duration of a project):"
        onChange={(e) => toggleData("totalProject", Number(e.target.value))}
        value={data?.totalProject}
        placeholder="000 000,00"
        type="number"
      />
      <div className="title">Contract Research</div>
      <Input
        id="orders"
        name="orders"
        label="Orders from third parties for your R&D projects (Net)"
        onChange={(e) => toggleData("orders", Number(e.target.value))}
        icon={<div style={{ color: "#EC6839", fontWeight: "600" }}>€</div>}
        value={data?.orders}
        button={"Monate"}
        placeholder="000 000,00"
        type="number"
      />

      <div className="actions">
        <button className="next" onClick={() => next(2)}>
          Next
        </button>
      </div>
    </div>
  );
}

export default Step1;
