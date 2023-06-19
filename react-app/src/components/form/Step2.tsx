import React from 'react'
import { Input } from '../shared/Fields';

function Step2({ toggleData, data, next }) {
  return (
    <div className="step-container">
      <div className="stepper stepper-2" />

      <div className="title">Please fill the form below to see the results</div>
      <div>Title</div>
      <div className="input">
        <select
          className="field"
          id="title"
          name="title"
          onChange={(e) => toggleData("title", e.target.value)}
          value={data?.title}
          placeholder="----------"
        >
          <option value="">----------</option> 
          <option value="Option 1">Software Engineer</option>
          <option value="Option 2">IT Marketer</option>
        </select>
      </div>

      <div className="multi">
        <Input
          id="firstName"
          name="firstName"
          label="First Name:"
          onChange={(e) => toggleData("firstName", e.target.value)}
          value={data?.firstName}
          placeholder="John"
        />
        <Input
          id="lastName"
          name="lastName"
          label="Last Name:"
          onChange={(e) => toggleData("lastName", e.target.value)}
          value={data?.lastName}
          placeholder="Example"
        />
      </div>
      <Input
        id="company"
        name="company"
        label="Company:"
        onChange={(e) => toggleData("company", e.target.value)}
        value={data?.company}
        placeholder="Example"
      />
      <div className="multi">
        <Input
          id="phone"
          name="phone"
          label="Phone Number:"
          onChange={(e) => toggleData("phone", e.target.value)}
          value={data?.phone}
          placeholder="+1 384 753 48"
        />
        <Input
          id="email"
          name="email"
          label="E-mail address:"
          onChange={(e) => toggleData("email", e.target.value)}
          value={data?.email}
          placeholder="example@mail.com"
        />
      </div>

      <div className="actions">
        <button className="prev" onClick={() => next(1)}>
          Back
        </button>
        <button className="next" onClick={() => next(3)}>
          Next
        </button>
      </div>
    </div>
  );
}

export default Step2