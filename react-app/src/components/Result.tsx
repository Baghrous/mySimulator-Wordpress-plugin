import React from "react";

function Result({ data, step }) {
  const personnelCost = ((data?.grossWages || 0) / 12) * (data?.totalProject || 0);
  const order = personnelCost * 0.25 + (data?.orders || 0) * 0.15;
  const total = personnelCost + order;

  return (
    <div className="result-container">
      <div className="title">You could receive up to:</div>

      <div className="result">
        <div className="label">
          <span>Personnel Costs</span>
          <div className="value">€ {step === 3 ? personnelCost + '*' : "-"}</div>
        </div>
        <div className="label">
          <span>Orders to Third Parties</span>
          <div className="value">€ {step === 3 ? order + '*' : "-"}</div>
        </div>
        <hr />
        <div className="label">
          <span>Your potential research allowance​</span>
          <div className="value">€ {step === 3 ? total + '*' : "-"}</div>
        </div>
      </div>
    </div>
  );
}

export default Result;
