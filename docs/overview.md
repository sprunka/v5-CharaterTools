### **Architecture for the Toolset**

#### **Core Responsibilities of the Toolset**:
1. **User Input Handling**:
   - Process user inputs in the **SPC Wizard** and **PreGen Generator**.
   - Dynamically adjust available fields based on form structure and backend logic (e.g., ensuring Merits and Flaws are paired correctly).

2. **API Integration**:
   - Send appropriate requests to an existing API for actual **data generation**.
   - Parse and display the API responses for users.

3. **Backend Intelligence**:
   - Use a lightweight backend (via SlimPHP) to:
      - Pre-load contextual data required for the wizard’s form structure at initialization (e.g., potential clans, predator types).
      - Format and validate the data sent to the API.
      - Serve as middleware between the frontend and the API.

4. **Session-Based In-Progress Saving**:
   - Data will be stored temporarily in sessions or memory during the wizard or pregen process, avoiding backend persistence like databases or file systems.

---

#### **SPC Wizard Details**:
1. **Character Creation Wizard**:
   - A step-by-step guided process for creating SPCs.
   - Steps include:
      - Selecting Clan, Sire, Predator Type, Backgrounds, Merits/Flaws.
      - Allocating Attributes, Skills, and Disciplines.
   - Each step will offer a **"randomly generated" option**, intelligently weighted to produce context-aware SPCs.

2. **Character Customization Options**:
   - Allow detailed manual adjustments during the creation process to add unique flavor to SPCs.

3. **SPC Overview Summary**:
   - Provide a final review and edit page before finalizing the character.

4. **Output Options**:
   - Generate an HTML character sheet with optional **PDF and JSON downloads**.

---

#### **PreGen Generator Details**:
1. **Random Pregen Generator**:
   - Instantly generate a full character with little or no user interaction.
   - Include minimal prompts (e.g., choose a Clan or leave it random).

2. **Customization on Pregens**:
   - Allow minor adjustments before finalizing the character.

3. **Output Options**:
   - Generate an HTML character sheet with optional **PDF and JSON downloads**.

---

### **API Development in Agile Workflow**:

#### **Uncertain API Endpoints**:
- The API doesn’t currently provide all the endpoints needed for Phase 1.
- As you uncover missing features during development, new **API tickets** will need to be created and prioritized.

#### **Collaboration Between Toolset and API Teams**:
1. **Incremental Development**:
   - Begin with endpoints already available and iteratively identify gaps.
2. **Interface Contracts**:
   - Define clear requirements for what the API needs to deliver for the tool (e.g., required fields, response formats).
   - Document any temporary mock responses or stub implementations for testing.

#### **Potential API Endpoints**:
Some likely requirements for the API include:
- **Get Options**: Fetch valid options for form fields (e.g., clans, disciplines, predator types).
- **Generate SPCs**: Create an SPC based on inputs from the Wizard.
- **Generate PreGen Characters**: Randomly create a PreGen character.

---

### **Agile Workflow Integration**:

1. **Split Work into Toolset and API Tickets**:
   - **Toolset Tickets**:
      - Design the frontend for the Wizard and PreGen Generator.
      - Implement backend logic for handling form inputs and preparing API requests.
   - **API Tickets**:
      - Extend the API to support required endpoints.
      - Define API payloads and responses collaboratively with the Toolset team.

2. **Iterative Development**:
   - Focus on completing one feature at a time (e.g., SPC Wizard Step 1).
   - Use mock data or temporary endpoints for unimplemented API features.

3. **Regular Feedback**:
   - Test features incrementally with users or internal testers to refine workflows and ensure smooth integration.
