        <div class="d-flex">
          <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
          </button>
          <div class="sidebar-logo">
            <a href="admin.php"><img src="../assets/images/DeskMitra horizontal.png" width="150px" alt="">
            </a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin.php" class="sidebar-link">
              <i class="lni lni-layout"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#applications"
              aria-expanded="false"
              aria-controls="applications"
            >
              <i class="lni lni-agenda"></i>
              <span>Applications</span>
            </a>
            <ul
              id="applications"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="view_received_applications.php" class="sidebar-link">New received</a>
              </li>
              <li class="sidebar-item">
                <a href="under_process_applications.php" class="sidebar-link">Under process</a>
              </li>
              <li class="sidebar-item">
                <a href="completed_applications.php" class="sidebar-link">Completed</a>
              </li>
              <li class="sidebar-item">
                <a href="rejected_applications.php" class="sidebar-link">Rejected</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#help"
              aria-expanded="false"
              aria-controls="help"
            >
              <i class="lni lni-help"></i>
              <span>Help</span>
            </a>
            <ul
              id="help"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a href="user_queries.php" class="sidebar-link">User Queries</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Raise Query</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              href="#"
              class="sidebar-link collapsed has-dropdown"
              data-bs-toggle="collapse"
              data-bs-target="#multi"
              aria-expanded="false"
              aria-controls="multi"
            >
              <i class="lni lni-user"></i>
              <span>Profile</span>
            </a>
            <ul
              id="multi"
              class="sidebar-dropdown list-unstyled collapse"
              data-bs-parent="#sidebar"
            >
              <li class="sidebar-item">
                <a
                  href="#"
                  class="sidebar-link collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#multi-two"
                  aria-expanded="false"
                  aria-controls="multi-two"
                >
                  Users
                </a>
                <ul
                  id="multi-two"
                  class="sidebar-dropdown list-unstyled collapse"
                >
                  <li class="sidebar-item">
                    <a href="view_users.php" class="sidebar-link">View Users</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Coming soon</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Coming soon</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-popup"></i>
              <span>Notification</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
              <i class="lni lni-cog"></i>
              <span>Setting</span>
            </a>
          </li>
        </ul>
        <div class="sidebar-footer">
          <a href="../index.php" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
          </a>
        </div>