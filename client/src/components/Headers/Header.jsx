

function Header(props){
 
    return(
        <div className = "container header">
            <div className = "row justify-content-between">
                <div className = "col-md-3  col-6 title">
                    <h1>{props.headerTitle}</h1>
                </div>
                <div className = "col-md-5  col-6 d-flex   btns">
                <button type="button" name = "ADD" id = "add-product-btn" className = "btn btn-primary ADD" onClick={props.blueFunc}>{props.blueBtn}</button>
                 <button name="MASS DELETE" type="button" id = "delete-product-btn" className = "btn btn-danger MASS-DELETE" onClick={props.redFunc}>{props.redBtn}</button>
                </div>
            </div>
            <hr></hr>
        </div>
    );
}
export default Header;