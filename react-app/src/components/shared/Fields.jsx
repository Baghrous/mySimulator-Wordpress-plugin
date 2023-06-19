export const Input = ({
  name,
  id,
  label,
  onChange,
  value = "",
  type = "text",
  icon = undefined,
  button = undefined,
  placeholder
}) => {
  return (
    <div className="input">
      <label htmlFor={id}>{label}</label>
      <div className="field">
        {icon && <div className="icon">{icon}</div>}
        <input
          id={id}
          name={name}
          type={type}
          value={value}
          onChange={onChange}
          placeholder={placeholder}
          className={icon ? "with-icon" : ""}
        />
        {button && <div className="button">{button}</div>}
      </div>
    </div>
  );
};
