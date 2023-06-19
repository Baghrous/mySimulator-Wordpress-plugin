import React from 'react'

function Step3({ next }) {
  return (
    <div className="step-container thanks-step">
      <div
        className="wrapper"
        style={{
          display: "flex",
          justifyContent: "center",
          textAlign: "center",
          alignItems: "center",
        }}
      >
        <div
          style={{
            padding: "10px",
            borderStyle: "solid",
            borderRadius: "99px",
            width: "100px",
            height: "100px",
            display: "flex",
            textAlign: "center",
            justifyContent: "center",
            alignItems: "center",
            fontSize: "90px",
            color: "#EC6838",
            borderColor: "#EC6838",
            flex: 2,
          }}
        >
          ✓
        </div>
        <div className="content">
          <h2>Thank you for your submission!</h2>
          <p>We will contact you very soon.</p>
          <button onClick={() => next(1)}>
            Eine weitere Berechnung vornehmen​
          </button>
        </div>
      </div>
    </div>
  );
}

export default Step3