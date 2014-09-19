<form action="#" method="post">
						    <div>
						         <label for="name">Text Input:</label>
						         <input type="text" name="name" id="name" value="" tabindex="1" />
						    </div>

						    <div>
						        <p>Radio Button Choice</p>
						        <ul>
						        	<li>
										<input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />
								        <label for="radio-choice">Choice 1</label>
								    </li>
							        <li>
										<input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
										<label for="radio-choice">Choice 2</label>
									</li>
								</ul>
						    </div>

							<div>
								<label for="select-choice">Select Dropdown Choice:</label>
								<select name="select-choice" id="select-choice">
									<option value="Choice 1">Choice 1</option>
									<option value="Choice 2">Choice 2</option>
									<option value="Choice 3">Choice 3</option>
								</select>
							</div>
							
							<div>
								<label for="textarea">Textarea:</label>
								<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
							</div>
							
							<div>
								<p>Checkbox text:</p>
								<ul>
									<li>
										<input type="checkbox" name="checkbox" id="checkbox" />
										<label for="checkbox-choice">I want to choose this option</label>
									</li>
								</ul>

						    </div>

							<div>
							    <input type="submit" value="Submit" />
						    </div>
						</form>